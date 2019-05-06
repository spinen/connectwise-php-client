<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

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
