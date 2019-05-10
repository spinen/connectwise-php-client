<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Holiday Version v2018_6
 *
 * Model for Holiday
 *
 * @property integer $id
 * @property string $name
 * @property boolean $allDayFlag
 * @property string $date
 * @property string $timeStart
 * @property string $timeEnd
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\HolidayListReference $holidayList
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 */
class Holiday extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'allDayFlag' => 'boolean',
        'date' => 'string',
        'timeStart' => 'string',
        'timeEnd' => 'string',
        'holidayList' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\HolidayListReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
    ];
}
