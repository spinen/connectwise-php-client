<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2019_1
 *
 * Model for ApiMember
 *
 * @property Carbon\Carbon $inactiveDate
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $serviceDefaultBoard
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2019_1\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference $timeZone
 * @property array $excludedServiceBoardIds
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $emailAddress
 * @property string $identifier
 * @property string $name
 * @property string $notes
 */
class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'emailAddress' => 'string',
        'excludedServiceBoardIds' => 'array',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notes' => 'string',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_1\System\SecurityRoleReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_1\System\StructureReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference',
    ];
}
