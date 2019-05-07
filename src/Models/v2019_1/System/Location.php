<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Location
 *
 * @property integer $id
 * @property integer $ownerLevelId
 * @property string $name
 * @property string $salesRep
 * @property string $overrideAddressLine1
 * @property string $overrideAddressLine2
 * @property string $overrideCity
 * @property string $overrideState
 * @property string $overrideZip
 * @property string $overridePhoneNumber
 * @property string $overrideFaxNumber
 * @property string $owaUrl
 * @property string $payrollXref
 * @property boolean $locationFlag
 * @property boolean $clientFlag
 * @property array $workRoleIds
 * @property array $departmentIds
 */
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
