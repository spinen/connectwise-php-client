<?php

namespace Spinen\ConnectWise\Laravel;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Spinen\ConnectWise\Api\Client;
use Spinen\ConnectWise\Api\Token;
use Spinen\ConnectWise\Exceptions\NoLoggedInUser;
use Spinen\ConnectWise\Support\ModelResolver;

/**
 * Class ConnectWiseProvider
 *
 * @package Spinen\ConnectWise\Laravel
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine the member Id to use for API call
     *
     * Allow a default member id to use for the API calls if there is no logged in user.
     *
     * @return mixed
     * @throws NoLoggedInUser
     */
    protected function determineMemberId()
    {
        if ($app->auth->check()) {
            return $app->auth->user()->connect_wise_member_id;
        }

        if (!is_null($this->app->config->get('services.connectwise.default_member_id'))) {
            return $this->app->config->get('services.connectwise.default_member_id');
        }

        throw new NoLoggedInUser("There is not a currently logged in user.");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerToken();

        $this->registerClient();

        $this->app->alias(Client::class, 'connectwise');
    }

    /**
     * Register the client object
     *
     * A Client needs to have some properties set, so in Laravel, we are going to pull them from the configs.
     */
    protected function registerClient()
    {
        $this->app->singleton(
            Client::class,
            function (Application $app) {
                $client = new Client(
                    $app->make(Token::class),
                    $app->make(Guzzle::class),
                    $app->make(ModelResolver::class)
                );

                $client->setIntegrator($app->config->get('services.connectwise.integrator'))
                       ->setPassword($app->config->get('services.connectwise.password'))
                       ->setUrl($app->config->get('services.connectwise.url'));

                return $client;
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Client::class,
            Token::class,
        ];
    }

    /**
     * Register the token object
     *
     * For our setup, everyone's ConnectWise username (member id) is the front part of their email less the dot
     * between the first & last name.
     */
    protected function registerToken()
    {
        $this->app->singleton(
            Token::class,
            function (Application $app) {
                $token = new Token();

                $token->setCompanyId($app->config->get('services.connectwise.company_id'))
                      ->setMemberId($this->determineMemberId());

                return $token;
            }
        );
    }
}
