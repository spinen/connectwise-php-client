<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class Category extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'priceLevelXref' => 'string',
        'integrationXref' => 'string',
        'locationIds' => 'array',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
    ];
}
