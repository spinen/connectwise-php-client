<?php

namespace Spinen\ConnectWise\Api;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection as LaravelCollection;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use Spinen\ConnectWise\Exceptions\MalformedRequest;
use Spinen\ConnectWise\Support\Collection;
use Spinen\ConnectWise\Support\Model;
use Spinen\ConnectWise\Support\ModelResolver;

/**
 * Class Client
 *
 * @package Spinen\ConnectWise\Api
 *
 * @method LaravelCollection|Model delete(string $resource, array $options = [])
 * @method LaravelCollection|Model get(string $resource, array $options = [])
 * @method LaravelCollection|Model getAll(string $resource, array $options = [])
 * @method LaravelCollection|Model head(string $resource, array $options = [])
 * @method LaravelCollection|Model patch(string $resource, array $options = [])
 * @method LaravelCollection|Model post(string $resource, array $options = [])
 * @method LaravelCollection|Model put(string $resource, array $options = [])
 */
class Client
{
    /**
     * The Client Id
     *
     * @var string
     * @see https://developer.connectwise.com/ClientID
     */
    protected $clientId;

    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * Headers that need to be used with token
     *
     * @var array
     */
    protected $headers = [];

    /**
     * Integrator username to make global calls
     *
     * @var string
     */
    protected $integrator;

    /**
     * Current page
     *
     * @var int
     */
    protected $page;

    /**
     * Number of records to retrieve
     *
     * @var int
     */
    protected $page_size = 100;

    /**
     * Integration password for global calls
     *
     * @var string
     */
    protected $password;

    /**
     * Resolves a model for the uri
     *
     * @var ModelResolver
     */
    protected $resolver;

    /**
     * The supported versions
     *
     * @var array
     */
    public $supported = [
        '2018.4',
        '2018.5',
        '2018.6',
        '2019.1',
        '2019.2',
        '2019.3',
        '2019.4',
        '2019.5',
    ];

    /**
     * Public & private keys to log into CW
     *
     * @var Token
     */
    protected $token;

    /**
     * URL to the ConnectWise installation
     *
     * @var string
     */
    protected $url;

    /**
     * Supported verbs
     *
     * @var array
     */
    protected $verbs = [
        'delete',
        'get',
        'head',
        'put',
        'post',
        'patch',
    ];

    /**
     * Version of the API being requested
     *
     * @var string
     */
    protected $version;

    /**
     * Client constructor.
     *
     * @param Token $token
     * @param Guzzle $guzzle
     * @param ModelResolver $resolver
     * @param string|null $version Version of the models to use with the API responses
     */
    public function __construct(Token $token, Guzzle $guzzle, ModelResolver $resolver, $version = null)
    {
        $this->token = $token;
        $this->guzzle = $guzzle;
        $this->resolver = $resolver;
        $this->setVersion($version ?? Arr::last($this->supported));
    }

    /**
     * Magic method to allow shortcuts to the request types
     *
     * @param string $verb
     * @param array $args
     *
     * @return Collection|Model|Response
     * @throws GuzzleException
     * @throws MalformedRequest
     */
    public function __call($verb, $args)
    {
        if (count($args) < 1) {
            throw new InvalidArgumentException('Magic request methods require a resource and optional options array');
        }

        // For "getAll", set page to 1 & change verb to "get", otherwise, no page
        if ($verb === 'getAll') {
            $this->page = 1;
            $verb = 'get';
        }

        if (!in_array($verb, $this->verbs)) {
            throw new InvalidArgumentException(sprintf("Unsupported verb [%s] was requested.", $verb));
        }

        return $this->request($verb, $this->trimResourceAsNeeded($args[0]), $args[1] ?? []);
    }

    /**
     * Adds key/value pair to the header to be sent
     *
     * @param array $header
     *
     * @return $this
     */
    public function addHeader(array $header)
    {
        foreach ($header as $key => $value) {
            $this->headers[$key] = $value;
        }

        return $this;
    }

    /**
     * Build authorization headers to send to CW API
     *
     * @return string
     */
    public function buildAuth()
    {
        if ($this->token->needsRefreshing()) {
            $this->token->refresh($this);
        }

        return 'Basic ' . base64_encode($this->token->getUsername() . ':' . $this->token->getPassword());
    }

    /**
     * Build the options to send to CW API
     *
     * We always need to login with Basic Auth, so add the "auth" option for Guzzle to use when logging in.
     * Additionally, pass any headers that have been set.
     *
     * @param array $options
     *
     * @return array
     */
    public function buildOptions(array $options = [])
    {
        return [
            'body'    => empty($options) ? null : json_encode($options),
            'headers' => $this->getHeaders(),
        ];
    }

    /**
     * Build the full path to the CW resource
     *
     * @param string $resource
     *
     * @return string
     * @throws MalformedRequest
     */
    public function buildUri($resource)
    {
        $uri = $this->getUrl($resource);

        // For getAll calls, make sure to add pageSize & page to request
        if ($this->page) {
            $uri .= (preg_match('/\\?/u', $uri) ? '&' : '?') . 'pageSize=' . $this->page_size . '&page=' . $this->page;
        }

        if (strlen($uri) > 2000) {
            throw new MalformedRequest(
                sprintf("The uri is too long. It is %s character(s) over the 2000 limit.", strlen($uri) - 2000)
            );
        }

        return $uri;
    }

    /**
     * Remove all set headers
     *
     * @return $this
     */
    public function emptyHeaders()
    {
        $this->setHeaders([]);

        return $this;
    }

    /**
     * Expose the client id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * The headers to send
     *
     * When making an integrator call (expired token), then you only have to send the "x-cw-usertype" header.
     *
     * @return array
     */
    public function getHeaders()
    {
        $authorization_headers = [
            'clientId'      => $this->getClientId(),
            'Authorization' => $this->buildAuth(),
        ];

        if ($this->token->isForUser($this->getIntegrator())) {
            return array_merge(
                [
                    'x-cw-usertype' => 'integrator',
                ],
                $authorization_headers
            );
        }

        return array_merge(
            [
                'x-cw-usertype' => 'member',
                'Accept'        => 'application/vnd.connectwise.com+json; version=' . $this->getVersion(),
            ],
            $authorization_headers,
            $this->headers
        );
    }

    /**
     * Expose the integrator username
     *
     * @return string
     */
    public function getIntegrator()
    {
        return $this->integrator;
    }

    /**
     * Expose the integrator password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Expose the url
     *
     * @param string|null $path
     *
     * @return string
     */
    public function getUrl($path = '')
    {
        return $this->url . '/v4_6_release/apis/3.0/' . ltrim($path, '/');
    }

    /**
     * Expose the version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Check to see if the array is a collection
     *
     * @param array $array
     *
     * @return bool
     */
    protected function isCollection(array $array)
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) === $keys;
    }

    /**
     * Check to see it there are more pages in a paginated call
     *
     * For paginated calls, ConnectWise returns a "Link" property in the header with a single string.
     *
     * There appears to be 3 potential responses...
     *  1) null -- The number of items in the collection is < the pageSize
     *  2) string ends with rel="last" -- More pages to go
     *  3) string ends with rel="first" -- On the last page
     *
     * Here are some examples...
     *  <https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=2>; rel="next", \
     *      <https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=3>; rel="last"
     *
     *  <https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=3>; rel="next", \
     *      <https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=1>; rel="first"
     *
     * @param ResponseInterface $response
     *
     * @return boolean
     */
    protected function isLastPage(ResponseInterface $response)
    {
        return !(bool)preg_match('/rel="last"$/u', $response->getHeader('Link')[0] ?? '');
    }

    /**
     * Process the error received from ConnectWise
     *
     * @param RequestException $exception
     *
     * @throws RequestException
     */
    protected function processError(RequestException $exception)
    {
        // TODO: Figure out what to really do with an error...
        // Request is in here... Psr7\str($exception->getRequest()
        // If $exception->hasResponse(), then response is in here... Psr7\str($exception->getResponse()

        // NOTE: For now, just rethrow the original exception
        throw $exception;
    }

    /**
     * Parse the response for the given resource
     *
     * @param string $resource
     * @param ResponseInterface $response
     *
     * @return Collection|Model|ResponseInterface|array
     */
    protected function processResponse($resource, ResponseInterface $response)
    {
        $response = (array)json_decode($response->getBody(), true);

        // Nothing to map the response to, so just return it as-is
        if (!$model = $this->resolver->find($resource, $this->getVersion())) {
            return $response;
        }

        // Not a collection of records, so cast to a model
        if (!$this->isCollection($response)) {
            return new $model($response, $this);
        }

        // Have a collection of records, so cast them all as a Collection
        return new Collection(
            array_map(
                function ($item) use ($model) {
                    $item = new $model($item, $this);

                    return $item;
                },
                $response
            )
        );
    }

    /**
     * Make call to the resource
     *
     * @param string $method
     * @param string $resource
     * @param array|null $options
     *
     * @return LaravelCollection|Model|Response
     * @throws GuzzleException
     * @throws MalformedRequest
     */
    protected function request($method, $resource, array $options = [])
    {
        try {
            $response = $this->guzzle->request($method, $this->buildUri($resource), $this->buildOptions($options));

            $processed = $this->processResponse($resource, $response);

            // If, not a "getAll" call, then return the response
            if (!$this->page) {
                return $processed;
            }

            // Get all of the other records
            while (!$this->isLastPage($response)) {
                $this->page = $this->page + 1;

                // Make next call
                $response = $this->guzzle->request($method, $this->buildUri($resource), $this->buildOptions($options));

                $processed = $processed->merge($this->processResponse($resource, $response));
            }

            return $processed;
        } catch (RequestException $e) {
            $this->processError($e);
        }
    }

    /**
     * Set the Client Id
     *
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Set the headers
     *
     * There is an "addHeader" method to push a single header onto the stack. Otherwise, this replaces the headers.
     *
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set the integrator username
     *
     * @param string $integrator
     *
     * @return $this
     */
    public function setIntegrator($integrator)
    {
        $this->integrator = $integrator;

        return $this;
    }

    /**
     * Set the integrator password
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the page size, not allowing < 0
     *
     * @param integer $page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->page_size = $page_size >= 0 ? $page_size : 0;

        return $this;
    }

    /**
     * Set the URL to ConnectWise
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(sprintf("The URL provided[%s] is not a valid format.", $url));
        }

        $this->url = rtrim($url, '/');

        return $this;
    }

    /**
     * Set the version of the API response models
     *
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        if (!in_array($version, $this->supported)) {
            throw new InvalidArgumentException(sprintf("The Version provided[%s] is not supported.", $version));
        }

        $this->version = $version;

        return $this;
    }

    /**
     * Make the resource being requested be relative without the leading slash
     *
     * @param string $resource
     *
     * @return string
     */
    protected function trimResourceAsNeeded($resource)
    {
        return ltrim(Str::replaceFirst($this->getUrl(), '', $resource), '/');
    }
}
