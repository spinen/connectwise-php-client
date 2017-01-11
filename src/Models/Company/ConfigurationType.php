<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class ConfigurationType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'name'        => 'string',
        'defaultFlag' => 'boolean',
        'vendorFlag'  => 'boolean',
        //        '_info'      => 'Metadata',
    ];
}
