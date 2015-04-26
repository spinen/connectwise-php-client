<?php

namespace Spinen\ConnectWise\Client\Processors;

use Carbon\Carbon;
use ReflectionClass;
use Spinen\ConnectWise\Library\Contracts\Processor;

/**
 * Class ConvertResponse
 *
 * @package Spinen\ConnectWise\Client\Processors
 */
class ConvertResponse implements Processor
{

    /**
     * The name of the api that is being called
     *
     * @var string|null
     */
    protected $api = null;

    /**
     * Columns to return
     *
     * @var array
     */
    protected $columns = [];

    /**
     * @var GetGetters
     */
    private $getters;

    /**
     * @param GetGetters $getters
     */
    function __construct(GetGetters $getters)
    {
        $this->getters = $getters;
    }

    /**
     * Convert the getter method to the name of the property
     *
     * @param string $getter
     *
     * @return string
     */
    private function buildPropertyName($getter)
    {
        return studly_case(preg_replace("/get([A-Z].*)/u", "$1", $getter));
    }

    /**
     * Get the value of the property from the response and convert any DateTime's to Carbon
     *
     * @param mixed  $response
     * @param string $getter
     *
     * @return mixed
     */
    private function getPropertyValue($response, $getter)
    {
        $value = $response->{$getter}();

        if (is_a($value, 'DateTime')) {
            return Carbon::instance($value);
        }

        return $value;
    }

    /**
     * Checks to see if we have a single Result object
     *
     * @param array $getters
     *
     * @return bool
     */
    private function isSingleResult(array $getters)
    {
        return (count($getters) === 1) && (ends_with($getters[0], 'Result'));
    }

    /**
     * @param string $class
     * @param array  $data
     *
     * @return object
     */
    private function makeClassIfExists($class, array $data)
    {
        if (!class_exists($class)) {
            $class = 'Spinen\\ConnectWise\\Library\\Support\\Collection';
        }

        $class = new ReflectionClass($class);

        return $class->newInstanceArgs($data);
    }

    /**
     * @param array $response
     *
     * @return object
     */
    public function makeCollection(array $response)
    {
        $class = 'Spinen\\ConnectWise\\Library\\Support\\Collections\\' . str_plural($this->api);

        return $this->makeClassIfExists($class, [$response]);
    }

    /**
     * @param array $value_object
     *
     * @return object
     */
    public function makeValueObject(array $value_object)
    {
        $class = 'Spinen\\ConnectWise\\Library\\Support\\ValueObjects\\' . $this->api;

        return $this->makeClassIfExists($class, [$value_object]);
    }

    /**
     * @param mixed       $response
     * @param string|null $api
     *
     * @return object
     */
    public function process($response, $api = null)
    {
        $this->setApi($api);

        if (is_array($response)) {
            // Must be working with an array
            $response = array_map([$this, "process"], $response);

            return $this->makeCollection($response);
        }


        if (!is_object($response)) {
            // Must be working with a single value, so nothing more to do
            return $response;
        }

        // Look up property getters
        $getters = (array)$this->getters->process($response);

        if ($this->isSingleResult($getters)) {
            // Must be working with a single object
            return $this->process($response->{$getters[0]}());
        }

        // Must be working with an object
        $value_object = [];

        // If there are specific columns that we want, then only have those getters
        if (!empty($this->columns)) {
            $getters = array_intersect($this->columns, $getters);
        }

        // Build values associative array to return
        foreach ($getters as $getter) {
            $value_object[$this->buildPropertyName($getter)] = $this->getPropertyValue($response, $getter);
        }

        return $this->makeValueObject($value_object);
    }

    /**
     * Set the columns that we need to return
     *
     * @param array $columns
     *
     * @return $this
     */
    public function setColumns(array $columns)
    {
        foreach ($columns as $column) {
            $this->columns[] = 'get' . studly_case($column);
        }

        return $this;
    }

    /**
     * Trim the Api from the end and set the property
     *
     * @param string $api
     *
     * @return $this
     */
    private function setApi($api)
    {
        if (!is_null($api)) {
            $this->api = substr($api, 0, - 3);
        }

        return $this;
    }

}
