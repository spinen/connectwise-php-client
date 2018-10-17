<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class Impact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'defaultFlag' => 'boolean',
    ];
}
