<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocation Version v2018_6
 *
 * Model for DepartmentLocation
 *
 * @property LdapConfigurationReference $ldapConfig
 * @property MemberReference $departmentManager
 * @property MemberReference $dispatch
 * @property MemberReference $dutyManager
 * @property MemberReference $serviceManager
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property integer $id
 */
class DepartmentLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllLocations' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'departmentManager' => MemberReference::class,
        'dispatch' => MemberReference::class,
        'dutyManager' => MemberReference::class,
        'id' => 'integer',
        'ldapConfig' => LdapConfigurationReference::class,
        'location' => SystemLocationReference::class,
        'removeAllLocations' => 'boolean',
        'serviceManager' => MemberReference::class,
    ];
}
