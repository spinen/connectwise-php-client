<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Location Version v2019_4
 *
 * Model for Location
 *
 * @property CalendarReference $calendar
 * @property CorporateStructureLevelReference $structureLevel
 * @property CountryReference $overrideCountry
 * @property MemberReference $manager
 * @property Metadata $_info
 * @property SystemLocationReference $reportsTo
 * @property TimeZoneSetupReference $timeZoneSetup
 * @property array $departmentIds
 * @property array $workRoleIds
 * @property bool $clientFlag
 * @property bool $locationFlag
 * @property int $id
 * @property int $ownerLevelId
 * @property string $name
 * @property string $overrideAddressLine1
 * @property string $overrideAddressLine2
 * @property string $overrideCity
 * @property string $overrideFaxNumber
 * @property string $overridePhoneNumber
 * @property string $overrideState
 * @property string $overrideZip
 * @property string $owaUrl
 * @property string $payrollXref
 * @property string $salesRep
 */
class Location extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'calendar' => CalendarReference::class,
        'clientFlag' => 'boolean',
        'departmentIds' => 'array',
        'id' => 'integer',
        'locationFlag' => 'boolean',
        'manager' => MemberReference::class,
        'name' => 'string',
        'overrideAddressLine1' => 'string',
        'overrideAddressLine2' => 'string',
        'overrideCity' => 'string',
        'overrideCountry' => CountryReference::class,
        'overrideFaxNumber' => 'string',
        'overridePhoneNumber' => 'string',
        'overrideState' => 'string',
        'overrideZip' => 'string',
        'owaUrl' => 'string',
        'ownerLevelId' => 'integer',
        'payrollXref' => 'string',
        'reportsTo' => SystemLocationReference::class,
        'salesRep' => 'string',
        'structureLevel' => CorporateStructureLevelReference::class,
        'timeZoneSetup' => TimeZoneSetupReference::class,
        'workRoleIds' => 'array',
    ];
}
