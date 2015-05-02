<?php

namespace Spinen\ConnectWise\Client;

use ArrayAccess;
use Carbon\Carbon;
use Countable;
use DateTime;
use InvalidArgumentException;

/**
 * Class Filter
 *
 * @package Spinen\ConnectWise\Client
 */
class Filter implements ArrayAccess, Countable
{

    /**
     * Core methods in the class
     *
     * @var array
     */
    protected $core_methods = ['set', 'orderBy', 'where', 'whereRaw'];

    /**
     * @var array
     */
    protected $filters = [];

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
     * Return the number of filters
     *
     * @return int
     */
    public function count()
    {
        return count($this->filters);
    }

    /**
     * Delete a filter
     *
     * @param string $filter
     */
    public function delete($filter)
    {
        $filter = studly_case($filter);

        unset($this->filters[$filter]);
    }

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

            $value->setTimezone('UTC');

            return '[' . $value->toIso8601String() . ']';
        }

        if ((is_array($value)) || (is_integer($value))) {
            return $value;
        }

        if (is_bool($value)) {
            return ($value) ? "true" : "false";
        }

        if (is_null($value)) {
            return "null";
        }

        return '\'' . addslashes($value) . '\'';
    }

    /**
     * Return the filter or value of optional passed property
     *
     * @param string|null $filter
     *
     * @return array
     */
    public function getFilter($filter = null)
    {
        if ((!is_null($filter)) && !($this->hasFilter($filter))) {
            throw new InvalidArgumentException(sprintf("Filter [%s] is not set.", $filter));
        }

        if (!is_null($filter)) {
            $filter = studly_case($filter);

            return $this->filters[$filter];
        }

        return $this->filters;
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
     * Checks to see if a filter is set
     *
     * @param $filter
     *
     * @return bool
     */
    public function hasFilter($filter)
    {
        $filter = studly_case($filter);

        return array_key_exists($filter, $this->getFilter());
    }

    /**
     * Checks to see if method is core
     *
     * @param string $method
     *
     * @return bool
     */
    public function isCoreMethod($method)
    {
        return in_array($method, $this->core_methods, true);
    }

    /**
     * Is there a filter set for the name
     *
     * @param mixed $filter
     *
     * @return bool
     */
    public function offsetExists($filter)
    {
        return $this->hasFilter($filter);
    }

    /**
     * Returns the value from the filter
     *
     * @param mixed $filter
     *
     * @return mixed
     */
    public function offsetGet($filter)
    {
        return $this->getFilter($filter);
    }

    /**
     * Set a filter
     *
     * @param mixed $filter
     *
     * @param mixed $value
     */
    public function offsetSet($filter, $value)
    {
        $this->set($filter, $value);
    }

    /**
     * Remove a filter
     *
     * @param mixed $filter
     */
    public function offsetUnset($filter)
    {
        $this->delete($filter);
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

        $column = studly_case($column);

        // Default to asc & make sure that all lower case
        $order = empty($order) ? 'asc' : strtolower($order);

        if (!in_array($order, ['asc', 'desc'])) {
            throw new InvalidArgumentException(sprintf("Invalid order [%s] to order the columns by.", $order));
        }

        $logical = $this->processLogical($logical, 'OrderBy');

        $logical = is_null($logical) ? $logical : ',';

        $this->filters['OrderBy'] .= implode(" ", array_filter(compact("logical", "column", "order")));

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
        $logical = strtoupper($logical);

        if ((!empty($logical)) && (!in_array($logical, ['AND', 'OR'], true))) {
            throw new InvalidArgumentException(sprintf("Provided an invalid logical operator [%s].", $logical));
        }

        // If no logical or no existing conditions, then set logical & conditions to null
        if ((empty($logical)) || (!array_key_exists($key, $this->filters))) {
            return $this->filters[$key] = null;
        }

        return ' ' . $logical;
    }

    /**
     * Set a property in the query
     *
     * @param string $filter
     * @param mixed  $value
     *
     * @return $this
     */
    public function set($filter, $value)
    {
        if (empty($filter)) {
            throw new InvalidArgumentException("You must pass a property and value to set on the filter.");
        }

        $filter = studly_case($filter);

        $this->filters[$filter] = $this->encloseValue($value);

        return $this;
    }

    /**
     * Set the Where(s) as there can be more than one
     *
     * @param string      $column
     * @param mixed       $value
     * @param string|null $operator
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function where($column, $value, $operator = null, $logical = null)
    {
        if (empty($column)) {
            throw new InvalidArgumentException("You must pass at least property and value to filter the results.");
        }

        $column = studly_case($column);

        // Default to Equals
        $operator = empty($operator) ? '=' : $operator;

        if (!array_key_exists($operator, $this->getOperators())) {
            throw new InvalidArgumentException(sprintf("Provided an invalid operator [%s].", $operator));
        }

        $logical = $this->processLogical($logical, 'Conditions');

        $value = $this->encloseValue($value);

        $this->filters['Conditions'] .= implode(" ", array_filter(compact("logical", "column", "operator", "value")));

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

        $this->filters['Conditions'] .= implode(" ", array_filter(compact("logical", "condition")));

        return $this;
    }

}
