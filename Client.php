<?php

namespace Spinen\ConnectWise\Client;

use InvalidArgumentException;
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
     * This api that is going to be called
     *
     * @var string
     */
    protected $api = null;

    /**
     * Base namespace path to the api
     *
     * @var string
     */
    protected $api_namespace = 'Spinen\\ConnectWise\\Library\\Api\\Generated';

    /**
     * @var ConvertResponse
     */
    protected $converter;

    /**
     * Core items to register with the container
     *
     * @var array
     */
    protected $core_services = [
        'urls' => [
            'class'     => 'Spinen\\ConnectWise\\Library\\UrlEntry',
            'arguments' => [
                'Spinen\\ConnectWise\\Client\\Client',
                'Spinen\\ConnectWise\\Library\\Validator',
            ],
        ],
    ];

    /**
     * The method on the api that is getting called
     *
     * @var
     */
    protected $method = null;

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
     * @param array                $options
     * @param ConvertResponse|null $converter
     */
    public function __construct(array $options = [], ConvertResponse $converter = null)
    {
        $options = $this->ensureTimeZone($options);

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
        if (is_null($converter)) {
            $converter = $this->get('Spinen\\ConnectWise\\Client\\Processors\\ConvertResponse');;
        }

        if ('UTC' !== $this->get('config')['timezone']) {
            $converter->setTimeZone($this->get('config')['timezone']);
        }

        return $converter;
    }

    /**
     * Set timezone to system if there was not one passed in the options
     *
     * @param array $options
     *
     * @return array
     */
    private function ensureTimeZone(array $options)
    {
        return array_merge(['timezone' => date_default_timezone_get()], $options);
    }

    /**
     * Resolve the item from the IoC & execute the method on it
     *
     * @param array $arguments
     * @param array $columns
     *
     * @return \Spinen\ConnectWise\Library\Support\Collection
     */
    public function execute(array $arguments = [], $columns = [])
    {
        $parameters = $this->get($this->getApiNamespace($this->method));

        // Run through all of the keys in the argument, and call a setter on them if it exists
        foreach ($arguments as $argument => $value) {
            $setter = "set" . studly_case($argument);

            if (method_exists($parameters, $setter)) {
                $parameters->{$setter}($value);
            }
        }

        // Get the response from the WSDL
        $response = $this->get($this->getApiNamespace($this->api))
                         ->{$this->method}($parameters);

        // Unwrap all of the nested values that the WSDL returns
        $response = $this->converter->setApi($this->api)
                                    ->setColumns($columns)
                                    ->process($response);

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
     * Make a filter builder
     *
     * @param array $filters
     *
     * @return FilterBuilder
     * @throws InvalidArgumentException
     */
    public function makeFilterBuilder(array $filters = [])
    {
        if ((is_null($this->api)) || (is_null($this->method))) {
            throw new InvalidArgumentException("api and method must be set before making a FilterBuilder");
        }

        // Because we are building up the FilterBuilder then we need to make this
        $filter = $this->get('Spinen\\ConnectWise\\Client\\Filter');

        return $this->get('Spinen\\ConnectWise\\Client\\FilterBuilder', [$this, $filter, $filters]);
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
     * Set the Api
     *
     * @param string $api
     *
     * @return $this
     */
    public function setApi($api)
    {
        $this->api = $api;

        return $this;
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

        return $this;
    }

    /**
     * Set the method
     *
     * @param string $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }
}
