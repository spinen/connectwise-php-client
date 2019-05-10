<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2018_6
 *
 * Model for ApiMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $emailAddress
 * @property boolean $inactiveFlag
 * @property Carbon\Carbon $inactiveDate
 * @property Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2018_6\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2018_6\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\BoardReference $serviceDefaultBoard
 * @property string $notes
 * @property array $excludedServiceBoardIds
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
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
        'inactiveDate' => 'Carbon\Carbon',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2018_6\System\SecurityRoleReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2018_6\System\StructureReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2018_6\System\BoardReference',
        'notes' => 'string',
        'excludedServiceBoardIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
