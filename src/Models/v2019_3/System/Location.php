<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Location Version v2019_3
 *
 * Model for Location
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_3\System\CorporateStructureLevelReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_3\System\CountryReference $overrideCountry
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $reportsTo
 * @property Spinen\ConnectWise\Models\v2019_3\System\TimeZoneSetupReference $timeZoneSetup
 * @property array $departmentIds
 * @property array $workRoleIds
 * @property boolean $clientFlag
 * @property boolean $locationFlag
 * @property integer $id
 * @property integer $ownerLevelId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_3\System\CalendarReference',
        'clientFlag' => 'boolean',
        'departmentIds' => 'array',
        'id' => 'integer',
        'locationFlag' => 'boolean',
        'manager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'name' => 'string',
        'overrideAddressLine1' => 'string',
        'overrideAddressLine2' => 'string',
        'overrideCity' => 'string',
        'overrideCountry' => 'Spinen\ConnectWise\Models\v2019_3\System\CountryReference',
        'overrideFaxNumber' => 'string',
        'overridePhoneNumber' => 'string',
        'overrideState' => 'string',
        'overrideZip' => 'string',
        'owaUrl' => 'string',
        'ownerLevelId' => 'integer',
        'payrollXref' => 'string',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'salesRep' => 'string',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_3\System\CorporateStructureLevelReference',
        'timeZoneSetup' => 'Spinen\ConnectWise\Models\v2019_3\System\TimeZoneSetupReference',
        'workRoleIds' => 'array',
    ];
}
