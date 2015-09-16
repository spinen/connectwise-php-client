<?php

namespace Spinen\ConnectWise\Client\Laravel;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Spinen\ConnectWise\Client\Client;

/**
 * Class ServiceProvider
 *
 * @package Spinen\ConnectWise\Client\Laravel
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
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['connectwise'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configs = ['connectwise' => $this->app->make('config')['services']['connectwise']];

        $this->app->singleton('connectwise', function () use ($configs) {
            // @codeCoverageIgnoreStart
            return new Client($configs);
            // @codeCoverageIgnoreEnd
        });
    }
}
