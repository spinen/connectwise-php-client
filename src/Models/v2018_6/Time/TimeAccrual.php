<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrual Version v2018_6
 *
 * Model for TimeAccrual
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'holidayAvailableType' => 'string',
        'holidayCarryoverAllowedFlag' => 'boolean',
        'holidayCarryoverLimit' => 'float',
        'holidayFlag' => 'boolean',
        'id' => 'integer',
        'location' => SystemLocationReference::class,
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
