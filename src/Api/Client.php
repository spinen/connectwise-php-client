<?php

namespace Spinen\ConnectWise\Api;

use Exception;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Spinen\ConnectWise\Support\Collection;

/**
 * Class Client
 *
 * @package Spinen\ConnectWise\Api
 *
 * @method array delete(string $resource, array $options = [])
 * @method array get(string $resource, array $options = [])
 * @method array head(string $resource, array $options = [])
 * @method array patch(string $resource, array $options = [])
 * @method array post(string $resource, array $options = [])
 * @method array put(string $resource, array $options = [])
 */
class Client
{
    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * Headers that needs to be used with token
     *
     * @var array
     */
    protected $headers = [];

    /**
     * @var array
     */
    protected $resource_model_map = [
        'company/companies'                               => 'Company\Company',
        'company/companies/statuses'                      => 'Company\CompanyStatus',
        'company/companies/types'                         => 'Company\CompanyTypes',
        'company/companies/{id}/managementSummaryReports' => 'Company\CompanyManagementSummaryReport',
        'company/companies/{id}/sites'                    => 'Company\CompanySite',
        'company/companies/{id}/teams'                    => 'Company\CompanyTeam',
        'company/company/configurations'                  => 'Company\Configuration',
        'company/company/configurations/types'            => 'Company\ConfigurationType',
        'company/company/contacts/departments'            => 'Company\ContactDepartment',
        'company/company/contacts/{id}/communications'    => 'Company\ContactCommunication',
        'company/configurations/statuses'                 => 'Company\ConfigurationStatus',
        'company/configurations/types/{id}/questions'     => 'Company\ConfigurationTypeQuestion',
        'company/contacts'                                => 'Company\contact',
        'company/contacts/relationships'                  => 'Company\ContactRelationship',
        'company/contacts/types'                          => 'Company\ContactType',
        'company/contacts/{id}/notes'                     => 'Company\ContactNote',
        'company/contacts/{id}/tracks'                    => 'Company\ContactTrack',
        'company/notes'                                   => 'Company\CompanyNote',
        'expense/entries'                                 => 'Expense\ExpenseEntry',
        'expense/types'                                   => 'Expense\ExpenseType',
        'system/audittrail'                               => 'System\AuditTrail',
        'system/batch'                                    => 'System\Batch',
        'system/callbacks'                                => 'System\Callback',
        'system/connectwisehostedsetups'                  => 'System\ConnectWiseHostedSetup',
        'system/documents'                                => 'System\Document',
        'system/info'                                     => 'System\Info',
        'system/links'                                    => 'System\Link',
        'system/members'                                  => 'System\Member',
        'system/menuentries'                              => 'System\MenuEntry',
        'system/reports'                                  => 'System\Report',
        'system/userDefinedFields'                        => 'System\UserDefinedField',
    ];

    /**
     * Integrator username to make global calls
     *
     * @var
     */
    protected $integrator;

    /**
     * Integration password for global calls
     *
     * @var
     */
    protected $password;

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
     * Client constructor.
     *
     * @param Token  $token
     * @param Guzzle $guzzle
     */
    public function __construct(Token $token, Guzzle $guzzle)
    {
        $this->token = $token;
        $this->guzzle = $guzzle;
    }

    /**
     * Magic method to allow short cut to the request types
     *
     * @param string $verb
     * @param array  $args
     *
     * @return array
     */
    public function __call($verb, $args)
    {
        if (count($args) < 1) {
            throw new InvalidArgumentException('Magic request methods require a resource and optional options array');
        }

        if (!in_array($verb, $this->verbs)) {
            throw new InvalidArgumentException(sprintf("Unsupported verb [%s] was requested.", $verb));
        }

        return $this->request($verb, $args[0], $args[1] ?? []);
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
     * Build authorization headers to send CW API
     *
     * @return array
     */
    public function buildAuth()
    {
        if ($this->token->needsRefreshing()) {
            $this->token->refresh($this);
        }

        return [
            $this->token->getUsername(),
            $this->token->getPassword(),
        ];
    }

    /**
     * Build the options to send to API
     *
     * We allays need to login with Basic Auth, so add the "auth" option for Guzzle to use when logging in.
     * Additionally, pass any headers that have been set.
     *
     * @param array $options
     *
     * @return array
     */
    public function buildOptions(array $options = [])
    {
        return array_merge_recursive($options, [
            'auth'    => $this->buildAuth(),
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * Build the full path to the CW resource
     *
     * @param string $resource
     *
     * @return string
     */
    public function buildUri($resource)
    {
        return $this->url . '/v4_6_release/apis/3.0/' . ltrim($resource, '/');
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
     * Find the model to fill with the results from the request
     *
     * This is a little more complicated than you would think that it needs to be, but we have to map the response to
     * a model by looking at the URI.  If the URI is for a specific id, then the id has to be converted to the wildcard
     * in the map or it is a single resource & not a collection, then the id has to be removed from the end.
     *
     * @param string $uri
     *
     * @return string|null
     */
    public function findResourceModel($uri)
    {
        // Pull leading slash off
        $uri = ltrim($uri, '/');

        // Bust the resource into the parts
        $uri_parts = parse_url($uri);

        // Trim /\\d+ off the end
        $pattern = preg_replace('|/\\d+$|u', '', $uri_parts['path']);

        // Replace /\\d+/ with /{id}}/
        $pattern = preg_replace('|/\\d+/|u', '/{id}/', $pattern);

        // Make regex
        $pattern = '|^/?' . $pattern . '/?\\d*?$|ui';

        // This is convoluted, but it is getting the first value of the filtered resources that the key matches the
        // associative array
        // TODO: Consider flipping the resource map array to put the resources second to clean this up?
        try {
            return array_values(array_intersect_key($this->resource_model_map,
                array_flip(preg_grep($pattern, array_keys($this->resource_model_map)))))[0];
        } catch (Exception $exception) {
            return null;
        }
    }

    /**
     * The headers to send
     *
     * When making an integrator call (expired token), then you have to only send the "x-cw-usertype" header.
     *
     * @return array
     */
    public function getHeaders()
    {
        if ($this->token->isForUser($this->integrator)) {
            return [
                'x-cw-usertype' => 'integrator',
            ];
        }

        return $this->headers;
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
     * Process the error received from ConnectWise
     *
     * @param RequestException $exception
     */
    // TODO: Figure out what to really do with an error...
    /**
     * @param RequestException $exception
     */
    protected function processError(RequestException $exception)
    {
        echo Psr7\str($exception->getRequest());

        if ($exception->hasResponse()) {
            echo Psr7\str($exception->getResponse());
        }
    }

    /**
     * @param          $resource
     * @param Response $response
     *
     * @return array|Response
     */
    protected function processResponse($resource, Response $response)
    {
        $response = (array)json_decode($response->getBody(), true);

        if ($model = $this->findResourceModel($resource)) {
            $model = 'Spinen\ConnectWise\Models\\' . $model;

            if ($this->isCollection($response)) {
                $response = array_map(function ($item) use ($model) {
                    $item = new $model($item);

                    return $item;
                }, $response);

                return new Collection($response);
            }

            return new $model($response);
        }

        return $response;
    }

    /**
     * Make call to the resource
     *
     * @param string     $method
     * @param string     $resource
     * @param array|null $options
     *
     * @return array
     */
    protected function request($method, $resource, array $options = [])
    {
        try {
            $response = $this->guzzle->request($method, $this->buildUri($resource), $this->buildOptions($options));

            return $this->processResponse($resource, $response);
        } catch (RequestException $e) {
            $this->processError($e);
        }
    }

    /**
     * Set the headers
     *
     * There is an "addHeader" method to push a single header onto the stack.  Otherwise,this replaces the headers.
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
     * Set the URL to ConnectWise
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(sprintf("The URL provided[%] is not a valid format.", $url));
        }

        $this->url = rtrim($url, '/');

        return $this;
    }

    protected function isCollection(array $array)
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) === $keys;
    }
}
