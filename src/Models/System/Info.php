<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Info extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'version' => 'string',
        'isCloud' => 'boolean',
        'serverTimeZone' => 'string',
    ];
}
