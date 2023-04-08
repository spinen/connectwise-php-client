<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Holiday Version v2018_6
 *
 * Model for Holiday
 *
 * @property HolidayListReference $holidayList
 * @property Metadata $_info
 * @property bool $allDayFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'allDayFlag' => 'boolean',
        'date' => 'string',
        'holidayList' => HolidayListReference::class,
        'id' => 'integer',
        'name' => 'string',
        'timeEnd' => 'string',
        'timeStart' => 'string',
    ];
}
