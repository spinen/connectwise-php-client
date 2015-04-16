<?php

namespace Spinen\ConnectWise\Client;

/**
 * Class FilterBuilder
 *
 * @package Spinen\ConnectWise\Client
 */
use Carbon\Carbon;
use DateTime;
use InvalidArgumentException;
use RuntimeException;

/**
 * Class FilterBuilder
 *
 * @package Spinen\ConnectWise\Client
 */
class FilterBuilder
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * Filter to run through the call
     *
     * @var array
     */
    protected $filter = [];

    /**
     * The logicals that are supported in the conditions
     *
     * @var array
     */
    protected $logicals = [
        'AND',
        'OR',
    ];

    /**
     * The operators that is supported in conditions
     *
     * @var array
     */
    // NOTE: Order is important as we match top down
    /**
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
     * @param Client $client
     * @param array  $filters
     */
    public function __construct(Client $client, array $filters = [])
    {
        $this->client = $client;

        // Set any passed in filters
        array_map([$this, 'set'], $filters);
    }

    /**
     * @param $method
     * @param $arguments
     *
     * @return mixed
     * @throws RuntimeException
     */
    function __call($method, $arguments)
    {
        $parts = [];

        // Setter like setLimit
        if (preg_match("/^set([A-Z].+)/u", $method, $parts)) {
            $property = $parts[1];
            $value = $arguments[0];

            return call_user_func_array([$this, 'set'], compact("property", "value"));
        }

        // Conditions builder
        if (preg_match("/^(and|or)?(?:W|w)here(.+)/u", $method, $parts)) {
            foreach ($this->operators as $operator => $description) {
                if (ends_with($parts[2], $description)) {
                    $property = str_replace($description, "", $parts[2]);
                    $value = $arguments[0];
                    $logical = $parts[1];

                    return call_user_func_array([$this, 'where'], compact("property", "operator", "value", "logical"));
                }
            }
        }

        throw new RuntimeException(sprintf("Method [%s] not found.", $method));
    }

    /**
     * Get the data from the client with the filter
     *
     * An array of columns canbe passed in to limit the columns that are returned
     *
     * @param array $columns
     *
     * @return \Spinen\ConnectWise\Library\Support\Collection
     */
    public function get(array $columns = [])
    {
        if (!empty($columns)) {
            $this->filter['ReturnFields'] = $columns;
        }

        return $this->client->execute((array)$this->filter);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
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
     * Pads the value with the proper delimiters based on type
     *
     * @param mixes $value
     *
     * @return string
     */
    private function padValue($value)
    {
        if ($value instanceof DateTime) {
            // Make the value a Carbon if not already so, as DateTime does not return correct ISO8601 date
            $value = (($value instanceof Carbon) ? $value : Carbon::instance($value));
            // ISO 8601
            return '[' . $value->toIso8601String() . ']';
        }

        return '\'' . $value . '\'';
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
        $this->filter[$property] = $this->padValue($value);

        return $this;
    }

    /**
     * Set the orderBys as there can be more than one
     *
     * @param      $column
     * @param null $order
     */
    public function setOrderBy($column, $order = null)
    {
        if ((!is_null($order)) && (!strcasecmp('desc', $order) === 0)) {
            throw new InvalidArgumentException(sprintf("Invalid order [%s] to order the columns by.", $order));
        }

        if (!is_null($order)) {
            $order = ' ' . $order;
        }

        $existing = null;

        if (array_key_exists('OrderBy', $this->filter)) {
            $existing = $this->filter['Orderby'] . ', ';
        }

        $this->filter['OrderBy'] = $existing . $column . $order;
    }

    /**
     * Build a where condition for the filter
     *
     * @param string      $property
     * @param string      $operator
     * @param mixed       $value
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function where($property, $operator, $value, $logical = null)
    {
        if (!array_key_exists($operator, $this->operators)) {
            throw new InvalidArgumentException(sprintf("Provided an invalid operator [%s].", $operator));
        }

        $logical = $this->whereConditionPad($logical);

        $value = $this->padValue($value);

        $this->filter['conditions'] .= implode(" ", [$logical, $property, $operator, $value]);

        return $this;
    }

    /**
     * If there are not any existing conditions, then null out the logical.  Otherwise, pad it
     *
     * @param string $logical
     *
     * @return null|string
     * @throws InvalidArgumentException
     */
    private function whereConditionPad($logical)
    {
        // If no logical or no existing conditions, then set conditions to null
        if ((empty($logical)) || (!array_key_exists('conditions', $this->filter))) {
            return $this->filter['conditions'] = null;
        }

        $logical = strtoupper($logical);

        if (!in_array($logical, $this->logicals)) {
            throw new InvalidArgumentException(sprintf("Provided an invalid logical operator [%s].", $logical));
        }

        return ' ' . $logical;
    }

    /**
     * Raw condition statement
     *
     * @param string      $condition
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function whereRaw($condition, $logical = null)
    {
        $logical = $this->whereConditionPad($logical);

        $this->filter['conditions'] .= $logical . $condition;

        return $this;
    }

}
