<?php

namespace Spinen\ConnectWise\Client\Processors;

use Spinen\ConnectWise\Library\Contracts\Processor;

/**
 * Class ConvertResponse
 *
 * @package Spinen\ConnectWise\Client\Processors
 */
class ConvertResponse implements Processor
{

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
     * @param $response
     *
     * @return array
     */
    public function process($response)
    {
        if (is_array($response)) {
            return array_map([$this, "process"], $response);
        }

        $getters = (array)$this->getters->process($response);

        if ($this->isSingleResult($getters)) {
            return $this->process($response->{$getters[0]}());
        }

        $unwrapped = [];

        foreach ($getters as $getter) {
            $unwrapped[$this->buildPropertyName($getter)] = $response->{$getter}();
        }

        return $unwrapped;
    }

}
