<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrual
 *
 * @property integer $id
 * @property boolean $vacationFlag
 * @property string $vacationAvailableType
 * @property boolean $vacationCarryoverAllowedFlag
 * @property double $vacationCarryoverLimit
 * @property boolean $sickFlag
 * @property string $sickAvailableType
 * @property boolean $sickCarryoverAllowedFlag
 * @property double $sickCarryoverLimit
 * @property boolean $ptoFlag
 * @property string $ptoAvailableType
 * @property boolean $ptoCarryoverAllowedFlag
 * @property double $ptoCarryoverLimit
 * @property boolean $holidayFlag
 * @property string $holidayAvailableType
 * @property boolean $holidayCarryoverAllowedFlag
 * @property double $holidayCarryoverLimit
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
        'vacationFlag' => 'boolean',
        'vacationAvailableType' => 'string',
        'vacationCarryoverAllowedFlag' => 'boolean',
        'vacationCarryoverLimit' => 'double',
        'sickFlag' => 'boolean',
        'sickAvailableType' => 'string',
        'sickCarryoverAllowedFlag' => 'boolean',
        'sickCarryoverLimit' => 'double',
        'ptoFlag' => 'boolean',
        'ptoAvailableType' => 'string',
        'ptoCarryoverAllowedFlag' => 'boolean',
        'ptoCarryoverLimit' => 'double',
        'holidayFlag' => 'boolean',
        'holidayAvailableType' => 'string',
        'holidayCarryoverAllowedFlag' => 'boolean',
        'holidayCarryoverLimit' => 'double',
    ];
}
