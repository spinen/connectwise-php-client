<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2018_6
 *
 * Model for ApiMember
 *
 * @property Carbon\Carbon $inactiveDate
 * @property Spinen\ConnectWise\Models\v2018_6\System\BoardReference $serviceDefaultBoard
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2018_6\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference $timeZone
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'emailAddress' => 'string',
        'excludedServiceBoardIds' => 'array',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notes' => 'string',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2018_6\System\SecurityRoleReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2018_6\System\BoardReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2018_6\System\StructureReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference',
    ];
}
