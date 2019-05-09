<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrual Version v2019_3
 * 
 * Model for TimeAccrual
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Time\SystemLocationReference $location
 * @property boolean $vacationFlag
 * @property string $vacationAvailableType
 * @property boolean $vacationCarryoverAllowedFlag
 * @property number $vacationCarryoverLimit
 * @property boolean $sickFlag
 * @property string $sickAvailableType
 * @property boolean $sickCarryoverAllowedFlag
 * @property number $sickCarryoverLimit
 * @property boolean $ptoFlag
 * @property string $ptoAvailableType
 * @property boolean $ptoCarryoverAllowedFlag
 * @property number $ptoCarryoverLimit
 * @property boolean $holidayFlag
 * @property string $holidayAvailableType
 * @property boolean $holidayCarryoverAllowedFlag
 * @property number $holidayCarryoverLimit
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 */
class TimeAccrual extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Time\SystemLocationReference',
        'vacationFlag' => 'boolean',
        'vacationAvailableType' => 'string',
        'vacationCarryoverAllowedFlag' => 'boolean',
        'vacationCarryoverLimit' => 'number',
        'sickFlag' => 'boolean',
        'sickAvailableType' => 'string',
        'sickCarryoverAllowedFlag' => 'boolean',
        'sickCarryoverLimit' => 'number',
        'ptoFlag' => 'boolean',
        'ptoAvailableType' => 'string',
        'ptoCarryoverAllowedFlag' => 'boolean',
        'ptoCarryoverLimit' => 'number',
        'holidayFlag' => 'boolean',
        'holidayAvailableType' => 'string',
        'holidayCarryoverAllowedFlag' => 'boolean',
        'holidayCarryoverLimit' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
    ];
}
