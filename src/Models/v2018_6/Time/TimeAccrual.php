<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrual Version v2018_6
 *
 * Model for TimeAccrual
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Time\SystemLocationReference $location
 * @property boolean $vacationFlag
 * @property string $vacationAvailableType
 * @property boolean $vacationCarryoverAllowedFlag
 * @property float $vacationCarryoverLimit
 * @property boolean $sickFlag
 * @property string $sickAvailableType
 * @property boolean $sickCarryoverAllowedFlag
 * @property float $sickCarryoverLimit
 * @property boolean $ptoFlag
 * @property string $ptoAvailableType
 * @property boolean $ptoCarryoverAllowedFlag
 * @property float $ptoCarryoverLimit
 * @property boolean $holidayFlag
 * @property string $holidayAvailableType
 * @property boolean $holidayCarryoverAllowedFlag
 * @property float $holidayCarryoverLimit
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Time\SystemLocationReference',
        'vacationFlag' => 'boolean',
        'vacationAvailableType' => 'string',
        'vacationCarryoverAllowedFlag' => 'boolean',
        'vacationCarryoverLimit' => 'float',
        'sickFlag' => 'boolean',
        'sickAvailableType' => 'string',
        'sickCarryoverAllowedFlag' => 'boolean',
        'sickCarryoverLimit' => 'float',
        'ptoFlag' => 'boolean',
        'ptoAvailableType' => 'string',
        'ptoCarryoverAllowedFlag' => 'boolean',
        'ptoCarryoverLimit' => 'float',
        'holidayFlag' => 'boolean',
        'holidayAvailableType' => 'string',
        'holidayCarryoverAllowedFlag' => 'boolean',
        'holidayCarryoverLimit' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
    ];
}
