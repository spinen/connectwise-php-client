<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class MemberCertification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'percentComplete' => 'integer',
        'dateReceived' => 'carbon',
        'dateExpires' => 'carbon',
        'certificationNumber' => 'string',
        'notes' => 'string',
    ];
}
