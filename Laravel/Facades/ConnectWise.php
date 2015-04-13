<?php

namespace Spinen\ConnectWise\Client\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ConnectWise
 *
 * @package Spinen\ConnectWise\Client\Laravel
 */
class ConnectWise extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'connectwise';
    }

}
