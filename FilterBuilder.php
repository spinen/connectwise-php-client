<?php

namespace Spinen\ConnectWise\Client;

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
     * @var Filter
     */
    protected $filter;

    /**
     * @param Client $client
     * @param Filter $filter
     * @param array  $filters
     */
    public function __construct(Client $client, Filter $filter, array $filters = [])
    {
        $this->client = $client;
        $this->filter = $filter;

        // Set any passed in filters
        foreach ($filters as $property => $value) {
            $this->filter->set($property, $value);
        }
    }

    /**
     * Magic method to make the queries more expressive
     *
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
            $this->filter->set('ReturnFields', $columns);
        }

        return $this->client->execute($this->filter->getFilter());
    }

    /**
     * Return the client
     *
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Return the filter
     *
     * @return Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Check to see if the magic method call is for an OrderBy
     *
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
     * Check to see if the magic method call is for an OrderBy with a property in the method name
     *
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
     * Check to see if the magic method call is for a Where
     *
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
     * Check to see if the magic method call is for a WhereRaw
     *
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
                str_contains($arguments[0], array_keys($this->filter->getOperators())));
    }

    /**
     * Check to see if the magic method call is for a Where with a property in the method name
     *
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
     * Determines the parameters and calls OrderBy
     *
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

        $this->filter = $this->filter->orderBy($column, $order, $continue);

        return $this;
    }

    /**
     * Determines the parameters and calls OrderBy with a property in the method name
     *
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

        $this->filter = $this->filter->orderBy($column, $order, $continue);

        return $this;
    }

    /**
     * Determines the parameters and calls Set
     *
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

        $this->filter = $this->filter->set($property, $value);

        return $this;
    }

    /**
     * Determines the parameters and calls Where
     *
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

        $this->filter = $this->filter->where($property, $value, $operator, $logical);

        return $this;
    }

    /**
     * Determines the parameters and calls WhereRaw
     *
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

        $this->filter = $this->filter->whereRaw($condition, $logical);

        return $this;
    }

    /**
     * Determines the parameters and calls Where with a property in the method name
     *
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

        foreach ($this->filter->getOperators() as $operator => $description) {
            if (ends_with($property, $description)) {
                // Remove description off of the end of the property
                $property = str_replace($description, '', $property);

                $this->filter = $this->filter->where($property, $value, $operator,
                    $logical);

                return $this;
            }
        }

        // Default to equals
        $this->filter = $this->filter->where($property, $value, '=', $logical);

        return $this;
    }

}
