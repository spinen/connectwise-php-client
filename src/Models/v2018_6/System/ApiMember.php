<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2018_6
 *
 * Model for ApiMember
 *
 * @property BoardReference $serviceDefaultBoard
 * @property Carbon $inactiveDate
 * @property Metadata $_info
 * @property SecurityRoleReference $securityRole
 * @property StructureReference $structureLevel
 * @property SystemLocationReference $defaultLocation
 * @property SystemLocationReference $salesDefaultLocation
 * @property SystemLocationReference $securityLocation
 * @property TimeZoneSetupReference $timeZone
 * @property array $excludedServiceBoardIds
 * @property bool $inactiveFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'defaultLocation' => SystemLocationReference::class,
        'emailAddress' => 'string',
        'excludedServiceBoardIds' => 'array',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => Carbon::class,
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notes' => 'string',
        'salesDefaultLocation' => SystemLocationReference::class,
        'securityLocation' => SystemLocationReference::class,
        'securityRole' => SecurityRoleReference::class,
        'serviceDefaultBoard' => BoardReference::class,
        'structureLevel' => StructureReference::class,
        'timeZone' => TimeZoneSetupReference::class,
    ];
}
