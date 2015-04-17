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
     * @param Client $client
     * @param array  $filters
     */
    public function __construct(Client $client, array $filters = [])
    {
        $this->client = $client;

        // Set any passed in filters
        foreach ($filters as $property => $value) {
            $this->set($property, $value);
        }
    }

    /**
     * @param $method
     * @param $arguments
     *
     * @return mixed
     */
    function __call($method, $arguments)
    {
        $parts = [];

        if ($this->isWhereRawMethod($method, $arguments, $parts)) {
            return $this->runWhereRawMethod($arguments, $parts);
        }

        if ($this->isWhereWithPropertyMethod($method, $parts)) {
            return $this->runWhereWithPropertyMethod($arguments, $parts);
        }

        if ($this->isWhereMethod($method, $parts)) {
            return $this->runWhereMethod($arguments, $parts);
        }

        if ($this->isOrderByWithPropertyMethod($method, $parts)) {
            return $this->runOrderByWithPropertyMethod($parts);
        }

        if ($this->isOrderByMethod($method, $parts)) {
            return $this->runOrderByMethod($arguments, $parts);
        }

        return $this->runSetMethod($method, $arguments);
    }

    /**
     * Get the data from the client with the filter
     *
     * An array of columns can be passed in to limit the columns that are returned
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

        return $this->client->execute($this->getFilter());
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
        return (array)$this->filter;
    }

    /**
     * @param string $method
     * @param array  $parts
     *
     * @return bool
     */
    private function isOrderByMethod($method, array &$parts)
    {
        return (preg_match("/^(and)OrderBy$/u", $method, $parts));
    }

    /**
     * @param string $method
     * @param array  $parts
     *
     * @return bool
     */
    private function isOrderByWithPropertyMethod($method, array &$parts)
    {
        return (preg_match("/^(?:(and)O|o)rderBy(.+?(Asc|Desc)?)$/u", $method, $parts));
    }

    /**
     * @param string $method
     * @param array  $parts
     *
     * @return bool
     */
    private function isWhereMethod($method, array &$parts)
    {
        return (preg_match("/^(and|or)Where$/u", $method, $parts));
    }

    /**
     * @param string $method
     * @param array  $arguments
     * @param array  $parts
     *
     * @return bool
     */
    private function isWhereRawMethod($method, array $arguments, array &$parts)
    {
        return ((preg_match("/^(and|or)WhereRaw$/u", $method, $parts)) &&
                (count($arguments) === 1) &&
                str_contains($arguments[0], array_keys($this->operators)));
    }

    /**
     * @param string $method
     * @param array  $parts
     *
     * @return bool
     */
    private function isWhereWithPropertyMethod($method, array &$parts)
    {
        return (preg_match("/^(?:(?:(and|or)?W)|w)here(.+)$/u", $method, $parts));
    }

    /**
     * Set the orderBys as there can be more than one
     *
     * @param string      $column
     * @param string|null $order
     * @param bool|null   $logical
     *
     * @return $this
     */
    public function orderBy($column, $order = null, $logical = null)
    {
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
     * Pads the value with the proper delimiters based on type
     *
     * @param mixed $value
     *
     * @return string
     */
    private function padValue($value)
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

        return '\'' . $value . '\'';
    }

    /**
     * If there are not any existing conditions, then null out the logical.  Otherwise, pad it
     *
     * @param string $logical
     *
     * @param string $key
     *
     * @return null|string
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
     * @param array $arguments
     * @param array &$parts
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    private function runOrderByMethod(array $arguments, array &$parts)
    {
        if (!((count($arguments) === 1) || (count($arguments) === 2))) {
            throw new InvalidArgumentException("You must pass at least a column to order the results.");
        }

        $parts = array_pad($parts, 2, null);

        $column = $arguments[0];
        $order = $arguments[1];
        $continue = $parts[1];

        return $this->orderBy($column, $order, $continue);
    }

    /**
     * @param array &$parts
     *
     * @return $this
     */
    private function runOrderByWithPropertyMethod(array &$parts)
    {
        if (!((count($parts) === 3) || (count($parts) === 4))) {
            throw new InvalidArgumentException("You must pass at least the column and value to filter the results.");
        }

        $parts = array_pad($parts, 4, null);

        // Trim any Asc or Desc off of the end
        $column = preg_replace("/^(.*)(?:Asc|Desc)$/u", "$1", $parts[2]);
        $order = $parts[3];
        $continue = $parts[1];

        return $this->orderBy($column, $order, $continue);
    }

    /**
     * @param $method
     * @param $arguments
     *
     * @return mixed
     * @throws InvalidArgumentException
     */
    private function runSetMethod($method, $arguments)
    {
        $property = studly_case($method);

        if (count($arguments) !== 1) {
            throw new InvalidArgumentException(sprintf("You must pass a value to set for the property [%s].",
                $property));
        }

        $value = $arguments[0];

        return $this->set($property, $value);
    }

    /**
     * @param array $arguments
     * @param array &$parts
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    private function runWhereMethod(array $arguments, array &$parts)
    {
        if (!((count($arguments) === 2) || (count($arguments) === 3))) {
            throw new InvalidArgumentException("You must pass at least property and value to filter the results.");
        }

        $parts = array_pad($parts, 2, null);

        $property = $arguments[0];
        $value = $arguments[1];
        $operator = $arguments[2];
        $logical = $parts[1];

        return $this->where($property, $value, $operator, $logical);
    }

    /**
     * @param array $arguments
     * @param array &$parts
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    private function runWhereRawMethod(array $arguments, array &$parts)
    {
        if (count($arguments) !== 1) {
            throw new InvalidArgumentException("You must pass a raw query string to filter the results.");
        }

        $condition = $arguments[0];
        $logical = $parts[1];

        return $this->whereRaw($condition, $logical);
    }

    /**
     * @param array $arguments
     * @param array &$parts
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    private function runWhereWithPropertyMethod(array $arguments, array &$parts)
    {
        if (count($arguments) !== 1) {
            throw new InvalidArgumentException("You must pass a value for the property to filter the results.");
        }

        $parts = array_pad($parts, 3, null);

        $property = $parts[2];
        $value = $arguments[0];
        $logical = $parts[1];

        foreach ($this->operators as $operator => $description) {
            if (ends_with($property, $description)) {
                return $this->where(str_replace($description, '', $property), $value, $operator, $logical);
            }
        }

        // Default to equals
        return $this->where($property, $value, '=', $logical);
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
     * Build a where condition for the filter
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
        // Default to Equals
        $operator = empty($operator) ? '=' : $operator;

        if (!array_key_exists($operator, $this->operators)) {
            throw new InvalidArgumentException(sprintf("Provided an invalid operator [%s].", $operator));
        }

        $logical = $this->processLogical($logical, 'Conditions');

        $value = $this->padValue($value);

        $this->filter['Conditions'] .= implode(" ", array_filter(compact("logical", "property", "operator", "value")));

        return $this;
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
        $logical = $this->processLogical($logical, 'Conditions');

        $this->filter['Conditions'] .= $logical . $condition;

        return $this;
    }

}
