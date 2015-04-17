<?php

namespace Spinen\ConnectWise\Client;

use Carbon\Carbon;
use DateTime;
use InvalidArgumentException;

/**
 * Class Filter
 *
 * @package Spinen\ConnectWise\Client
 */
class Filter
{

    /**
     * @var array
     */
    protected $filter = [];

    /**
     * The operators that is supported in conditions
     *
     * NOTE: Order is important as we match top down
     *
     * @var array
     */
    protected $operators = [
        '!='       => 'NotEquals',
        '<='       => 'LessThanEquals',
        '>='       => 'GreaterThanEquals',
        '='        => 'Equals',
        '<'        => 'LessThan',
        '>'        => 'GreaterThan',
        'contains' => 'Contains',
        'like'     => 'Like',
    ];

    /**
     * Encloses the value with the proper delimiters based on type
     *
     * @param mixed $value
     *
     * @return string|null
     */
    private function encloseValue($value)
    {
        if ($value instanceof DateTime) {
            // Make the value a Carbon if not already so, as DateTime does not return correct ISO8601 date
            $value = $value instanceof Carbon ? $value : Carbon::instance($value);

            // ISO 8601
            return '[' . $value->toIso8601String() . ']';
        }

        if ((is_bool($value)) || (is_integer($value))) {
            return $value;
        }

        if (is_null($value)) {
            return "null";
        }

        return '\'' . addslashes($value) . '\'';
    }

    /**
     * Return the filter
     *
     * @return array
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Return the operators
     *
     * @return array
     */
    public function getOperators()
    {
        return $this->operators;
    }

    /**
     * Set the OrderBy(s) as there can be more than one
     *
     * @param string      $column
     * @param string|null $order
     * @param bool|null   $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function orderBy($column, $order = null, $logical = null)
    {
        if (empty($column)) {
            throw new InvalidArgumentException("You must pass at least the column and value to filter the results.");
        }

        // Default to asc & make sure that all lower case
        $order = empty($order) ? 'asc' : strtolower($order);

        if (!in_array($order, ['asc', 'desc'])) {
            throw new InvalidArgumentException(sprintf("Invalid order [%s] to order the columns by.", $order));
        }

        $logical = $this->processLogical($logical, 'OrderBy');

        $logical = is_null($logical) ? $logical : ',';

        $this->filter['OrderBy'] .= implode(" ", array_filter(compact("logical", "column", "order")));

        return $this;
    }

    /**
     * If there are not any existing conditions, then null out the logical.  Otherwise, pad it
     *
     * @param string $logical
     * @param string $key
     *
     * @return null|string
     * @throws InvalidArgumentException
     */
    private function processLogical($logical, $key)
    {
        // If no logical or no existing conditions, then set logical & conditions to null
        if ((empty($logical)) || (!array_key_exists($key, $this->filter))) {
            return $this->filter[$key] = null;
        }

        $logical = strtoupper($logical);

        if (!in_array($logical, ['AND', 'OR'])) {
            throw new InvalidArgumentException(sprintf("Provided an invalid logical operator [%s].", $logical));
        }

        return ' ' . $logical;
    }

    /**
     * Set a property in the query
     *
     * @param string $property
     * @param mixed  $value
     *
     * @return $this
     */
    public function set($property, $value)
    {
        if (empty($property)) {
            throw new InvalidArgumentException("You must pass a property and value to set on the filter.");
        }

        $this->filter[$property] = $this->encloseValue($value);

        return $this;
    }

    /**
     * Set the Where(s) as there can be more than one
     *
     * @param string      $property
     * @param mixed       $value
     * @param string|null $operator
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function where($property, $value, $operator = null, $logical = null)
    {
        if (empty($property)) {
            throw new InvalidArgumentException("You must pass at least property and value to filter the results.");
        }

        // Default to Equals
        $operator = empty($operator) ? '=' : $operator;

        if (!array_key_exists($operator, $this->getOperators())) {
            throw new InvalidArgumentException(sprintf("Provided an invalid operator [%s].", $operator));
        }

        $logical = $this->processLogical($logical, 'Conditions');

        $value = $this->encloseValue($value);

        $this->filter['Conditions'] .= implode(" ", array_filter(compact("logical", "property", "operator", "value")));

        return $this;
    }

    /**
     * Set the WhereRaw(s) as there can be more than one
     *
     * @param string      $condition
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function whereRaw($condition, $logical = null)
    {
        if (empty($condition)) {
            throw new InvalidArgumentException("You must pass a raw query string to filter the results.");
        }

        $logical = $this->processLogical($logical, 'Conditions');

        $this->filter['Conditions'] .= $logical . $condition;

        return $this;
    }

}
