<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'emailAddress' => 'string',
        'inactiveFlag' => 'boolean',
        'inactiveDate' => 'carbon',
        'notes' => 'string',
        'excludedServiceBoardIds' => 'array',
    ];
}
