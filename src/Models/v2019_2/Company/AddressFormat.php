<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

class AddressFormat extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'format' => 'string',
        'defaultFlag' => 'boolean',
        'countryIds' => 'array',
        'addAllCountries' => 'boolean',
        'removeAllCountries' => 'boolean',
    ];
}
