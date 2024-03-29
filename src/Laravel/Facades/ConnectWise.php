<?php

namespace Spinen\ConnectWise\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ConnectWiseFacade
 */
class ConnectWise extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'connectwise';
    }
}
