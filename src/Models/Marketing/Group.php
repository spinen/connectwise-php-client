<?php

namespace Spinen\ConnectWise\Models\Marketing;

use Spinen\ConnectWise\Support\Model;

class Group extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'publicDescription' => 'string',
        'publicFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
