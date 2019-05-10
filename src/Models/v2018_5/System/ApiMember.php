<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2018_5
 *
 * Model for ApiMember
 *
 * @property Carbon\Carbon $inactiveDate
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2018_5\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference $timeZone
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $emailAddress
 * @property string $identifier
 * @property string $name
 */
class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'emailAddress' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2018_5\System\SecurityRoleReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2018_5\System\StructureReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference',
    ];
}
