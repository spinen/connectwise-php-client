<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class ActivityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'points' => 'integer',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'memoFlag' => 'boolean',
    ];
}
