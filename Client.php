<?php

namespace Spinen\ConnectWise\Client;

use Spinen\ConnectWise\Library\Api\ApiCredentials;
use Spinen\ConnectWise\Library\Api\Signature;
use Spinen\ConnectWise\Library\Container;

/**
 * Class Client
 *
 * @package Spinen\ConnectWise\Client
 */
class Client extends Container
{

    // Pull in the methods from the generator
    use Signature;

    /**
     * Base namespace path to the api
     *
     * @var string
     */
    protected $api_namespace = 'Spinen\\ConnectWise\\Library\\Api\\Generated';

    /**
     * Required properties when initializing
     *
     * @var array
     */
    protected $rules = [
        'connectwise' => [
            'host'     => 'required|url',
            'company'  => 'required',
            'username' => 'required',
            'password' => 'required',
        ],
    ];

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->registerApiCredentials();

        $this->registerApiBindings();
    }

    /**
     * Resolve the item from the IoC & execute the method on it
     *
     * @param string $api
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     */
    public function execute($api, $method, array $arguments = [])
    {
        $parameters = $this->get($this->getApiNamespace($method));

        // Run through all of the keys in the argument, and call a setter on them if it exists
        foreach ($arguments as $argument => $value) {
            $setter = "set" . studly_case($argument);

            if (method_exists($parameters, $setter)) {
                $parameters->{$setter}($value);
            }
        }

        return $this->get($this->getApiNamespace($api))
                    ->{$method}($parameters);
    }

    /**
     * Get the namespace with optionally appended class
     *
     * @param string|null $class
     *
     * @return string
     */
    public function getApiNamespace($class = null)
    {
        return $this->api_namespace . ((is_null($class)) ? null : '\\' . $class);
    }

    /**
     * Expose the client
     *
     * Going to allow static calls to get the client
     *
     * @return Client
     */
    public static function getClient()
    {
        return static::getInstance();
    }

    /**
     * Get the FQDN to the cw host with optional uri
     *
     * @param string|null $path
     *
     * @return string
     */
    public function getHost($path = null)
    {
        // Strip any leading slash
        $path = preg_replace("|/*(.*)|u", "$1", $path);

        return $this->get('config')['connectwise']['host'] . (($path) ? '/' . $path : null);
    }

    /**
     * Returns the options for the Soap Class
     *
     * @return array
     */
    public function getSoapOptions()
    {
        return (array)((isset($this->get('config')->soap_options)) ? $this->get('config')->soap_options : null);
    }

    /**
     * Sets up a singleton for the ApiCredentials
     */
    private function registerApiCredentials()
    {
        $this->singleton($this->getApiNamespace('ApiCredentials'), function () {
            // @codeCoverageIgnoreStart
            $connectwise = $this->get('config')['connectwise'];

            return new \Spinen\ConnectWise\Library\Api\Generated\ApiCredentials($connectwise['company'],
                $connectwise['username'], $connectwise['password']);
            // @codeCoverageIgnoreEnd
        });
    }

    /**
     * Allow the namespace to be overwritten
     *
     * @param $api_namespace
     *
     * @return $this
     */
    public function setApiNamespace($api_namespace)
    {
        $this->api_namespace = $api_namespace;

        // Allow chaining
        return $this;
    }

}
