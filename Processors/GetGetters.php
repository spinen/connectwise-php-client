<?php

namespace Spinen\ConnectWise\Client\Processors;

use ReflectionMethod;
use Spinen\ConnectWise\Library\Contracts\Processor;
use Spinen\ConnectWise\Library\Support\ClassReflector;

class GetGetters implements Processor
{

    /**
     * @var ClassReflector
     */
    private $reflector;

    function __construct(ClassReflector $reflector)
    {
        $this->reflector = $reflector;
    }

    public function process($object)
    {
        $methods = $this->reflector->reflect($object)
                                   ->getMethods(ReflectionMethod::IS_PUBLIC);

        // Get the actual name of the method
        $methods = array_map(function ($reflection) {
            return $reflection->getName();
        }, $methods);

        // Filter out all but the getters
        $methods = array_filter($methods, function ($method) {
            return preg_match("/^get[A-Z]/u", $method);
        });

        // Make sure to reindex the results after the filters
        return array_values($methods);
    }

}
