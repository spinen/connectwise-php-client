<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class CentralServiceEula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'eulaKey' => 'string',
        'acceptedFlag' => 'boolean',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'signedDate' => 'carbon',
    ];
}
