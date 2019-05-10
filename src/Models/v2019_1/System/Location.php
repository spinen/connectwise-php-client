<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Location Version v2019_1
 *
 * Model for Location
 *
 * @property integer $id
 * @property integer $ownerLevelId
 * @property Spinen\ConnectWise\Models\v2019_1\System\CorporateStructureLevelReference $structureLevel
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $reportsTo
 * @property string $salesRep
 * @property Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference $timeZoneSetup
 * @property Spinen\ConnectWise\Models\v2019_1\System\CalendarReference $calendar
 * @property string $overrideAddressLine1
 * @property string $overrideAddressLine2
 * @property string $overrideCity
 * @property string $overrideState
 * @property string $overrideZip
 * @property Spinen\ConnectWise\Models\v2019_1\System\CountryReference $overrideCountry
 * @property string $overridePhoneNumber
 * @property string $overrideFaxNumber
 * @property string $owaUrl
 * @property string $payrollXref
 * @property boolean $locationFlag
 * @property boolean $clientFlag
 * @property array $workRoleIds
 * @property array $departmentIds
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_1\System\CorporateStructureLevelReference',
        'name' => 'string',
        'manager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'salesRep' => 'string',
        'timeZoneSetup' => 'Spinen\ConnectWise\Models\v2019_1\System\TimeZoneSetupReference',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_1\System\CalendarReference',
        'overrideAddressLine1' => 'string',
        'overrideAddressLine2' => 'string',
        'overrideCity' => 'string',
        'overrideState' => 'string',
        'overrideZip' => 'string',
        'overrideCountry' => 'Spinen\ConnectWise\Models\v2019_1\System\CountryReference',
        'overridePhoneNumber' => 'string',
        'overrideFaxNumber' => 'string',
        'owaUrl' => 'string',
        'payrollXref' => 'string',
        'locationFlag' => 'boolean',
        'clientFlag' => 'boolean',
        'workRoleIds' => 'array',
        'departmentIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
