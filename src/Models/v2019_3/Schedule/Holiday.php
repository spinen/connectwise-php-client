<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Holiday Version v2019_3
 *
 * Model for Holiday
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\HolidayListReference $holidayList
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property boolean $allDayFlag
 * @property integer $id
 * @property string $date
 * @property string $name
 * @property string $timeEnd
 * @property string $timeStart
 */
class Holiday extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'allDayFlag' => 'boolean',
        'date' => 'string',
        'holidayList' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\HolidayListReference',
        'id' => 'integer',
        'name' => 'string',
        'timeEnd' => 'string',
        'timeStart' => 'string',
    ];
}
