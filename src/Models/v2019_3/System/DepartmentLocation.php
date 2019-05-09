<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocation Version v2019_3
 * 
 * Model for DepartmentLocation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $dispatch
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\LdapConfigurationReference $ldapConfig
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class DepartmentLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'dispatch' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'ldapConfig' => 'Spinen\ConnectWise\Models\v2019_3\System\LdapConfigurationReference',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
