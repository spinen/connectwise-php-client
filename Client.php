<?php

namespace Spinen\ConnectWise\Client;

use Spinen\ConnectWise\Client\Processors\ConvertResponse;
use Spinen\ConnectWise\Library\Api\ApiCredentials;
use Spinen\ConnectWise\Library\Api\Signature;
use Spinen\ConnectWise\Library\Container;
use Spinen\ConnectWise\Library\Contracts\Container as ContainerInterface;
use Spinen\ConnectWise\Library\Contracts\Signature as SignatureInterface;

/**
 * Class Client
 *
 * @package Spinen\ConnectWise\Client
 */
class Client extends Container implements ContainerInterface, SignatureInterface
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
     * @var ConvertResponse
     */
    private $converter;

    /**
     * @param array                $options
     * @param ConvertResponse|null $converter
     */
    public function __construct(array $options = [], ConvertResponse $converter = null)
    {
        parent::__construct($options);

        $this->registerApiCredentials();

        $this->registerApiBindings();

        $this->converter = $this->checkConverter($converter);
    }

    /**
     * Allow the client to be created without the converter, and make it if null
     *
     * @param ConvertResponse|null $converter
     *
     * @return ConvertResponse
     */
    private function checkConverter(ConvertResponse $converter = null)
    {
        if (!is_null($converter)) {
            return $converter;
        }

        return $this->get('Spinen\\ConnectWise\\Client\\Processors\\ConvertResponse');
    }

    /**
     * Resolve the item from the IoC & execute the method on it
     *
     * @param string $api
     * @param string $method
     * @param array  $arguments
     *
     * @return \Spinen\ConnectWise\Library\Support\Collection
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

        // Get the response from the WSDL
        $response = $this->get($this->getApiNamespace($api))
                         ->{$method}($parameters);

        // Unwrap all of the nested values that the WSDL returns
        $response = $this->converter->process($response);

        // If we have an array, then make collection
        if (is_array($response)) {
            return $this->get('Spinen\\ConnectWise\\Library\\Support\\Collection', [$response]);
        }

        return $response;
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
