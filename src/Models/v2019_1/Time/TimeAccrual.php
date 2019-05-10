<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrual Version v2019_1
 *
 * Model for TimeAccrual
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Time\SystemLocationReference $location
 * @property boolean $holidayCarryoverAllowedFlag
 * @property boolean $holidayFlag
 * @property boolean $ptoCarryoverAllowedFlag
 * @property boolean $ptoFlag
 * @property boolean $sickCarryoverAllowedFlag
 * @property boolean $sickFlag
 * @property boolean $vacationCarryoverAllowedFlag
 * @property boolean $vacationFlag
 * @property float $holidayCarryoverLimit
 * @property float $ptoCarryoverLimit
 * @property float $sickCarryoverLimit
 * @property float $vacationCarryoverLimit
 * @property integer $id
 * @property string $holidayAvailableType
 * @property string $ptoAvailableType
 * @property string $sickAvailableType
 * @property string $vacationAvailableType
 */
class TimeAccrual extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Time\Metadata',
        'holidayAvailableType' => 'string',
        'holidayCarryoverAllowedFlag' => 'boolean',
        'holidayCarryoverLimit' => 'float',
        'holidayFlag' => 'boolean',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Time\SystemLocationReference',
        'ptoAvailableType' => 'string',
        'ptoCarryoverAllowedFlag' => 'boolean',
        'ptoCarryoverLimit' => 'float',
        'ptoFlag' => 'boolean',
        'sickAvailableType' => 'string',
        'sickCarryoverAllowedFlag' => 'boolean',
        'sickCarryoverLimit' => 'float',
        'sickFlag' => 'boolean',
        'vacationAvailableType' => 'string',
        'vacationCarryoverAllowedFlag' => 'boolean',
        'vacationCarryoverLimit' => 'float',
        'vacationFlag' => 'boolean',
    ];
}
