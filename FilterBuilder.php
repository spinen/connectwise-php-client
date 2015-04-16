<?php

namespace Spinen\ConnectWise\Client;

/**
 * Class FilterBuilder
 *
 * @package Spinen\ConnectWise\Client
 */
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
    protected $operators = [
        '='        => 'Equals',
        '!='       => 'NotEquals',
        '<'        => 'LessThan',
        '<='       => 'LessThanEquals',
        '>'        => 'GreaterThan',
        '>='       => 'GreaterThanEquals',
        'contains' => 'Contains',
        'like'     => 'Like',
    ];

    /**
     * @param Client $client
     * @param array  $filter
     */
    public function __construct(Client $client, array $filter = [])
    {
        $this->client = $client;
        $this->filter = $filter;
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
     * @param      $column
     * @param null $order
     */
    public function orderBy($column, $order = null)
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
     * Set a property in the query
     *
     * @param string $property
     * @param string $value
     *
     * @return $this
     */
    public function set($property, $value)
    {
        $this->filter[$property] = $value;

        return $this;
    }

    /**
     * Build a where condition for the filter
     *
     * @param string      $property
     * @param string      $operator
     * @param string      $value
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function where($property, $operator, $value, $logical = 'AND')
    {
        if (!array_key_exists($operator, $this->operators)) {
            throw new InvalidArgumentException(sprintf("Provided an invalid operator [%s].", $operator));
        }

        $logical = $this->whereConditionPad($logical);

        $this->filter['conditions'] .= $logical . $property . ' ' . $operator . ' ' . $value;

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
        if (!in_array($logical, $this->logicals)) {
            throw new InvalidArgumentException(sprintf("Provided an invalid logical operator [%s].", $logical));
        }

        if (!array_key_exists('conditions', $this->filter)) {
            $this->filter['conditions'] = null;

            return null;
        }

        return ' ' . $logical . ' ';
    }

    /**
     * Raw condition statment
     *
     * @param string      $condition
     * @param string|null $logical
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function whereRaw($condition, $logical = 'AND')
    {
        $logical = $this->whereConditionPad($logical);

        $this->filter['conditions'] .= $logical . $condition;

        return $this;
    }

}
