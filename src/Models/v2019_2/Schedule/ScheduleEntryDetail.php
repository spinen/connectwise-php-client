<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail Version v2019_2
 *
 * Model for ScheduleEntryDetail
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Metadata $_info
 * @property ScheduleEntryReference $scheduleEntry
 * @property float $hoursScheduled
 * @property integer $id
 */
class ScheduleEntryDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'hoursScheduled' => 'float',
        'id' => 'integer',
        'scheduleEntry' => ScheduleEntryReference::class,
    ];
}
