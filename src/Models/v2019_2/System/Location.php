<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

class Location extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ownerLevelId' => 'integer',
        'name' => 'string',
        'salesRep' => 'string',
        'overrideAddressLine1' => 'string',
        'overrideAddressLine2' => 'string',
        'overrideCity' => 'string',
        'overrideState' => 'string',
        'overrideZip' => 'string',
        'overridePhoneNumber' => 'string',
        'overrideFaxNumber' => 'string',
        'owaUrl' => 'string',
        'payrollXref' => 'string',
        'locationFlag' => 'boolean',
        'clientFlag' => 'boolean',
        'workRoleIds' => 'array',
        'departmentIds' => 'array',
    ];
}
