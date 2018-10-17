<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Eula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'signedDate' => 'carbon',
    ];
}
