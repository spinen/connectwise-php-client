<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail Version v2019_1
 *
 * Model for ScheduleEntryDetail
 *
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property Metadata $_info
 * @property ScheduleEntryReference $scheduleEntry
 * @property float $hoursScheduled
 * @property int $id
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
        'dateEnd' => Carbon::class,
        'dateStart' => Carbon::class,
        'hoursScheduled' => 'float',
        'id' => 'integer',
        'scheduleEntry' => ScheduleEntryReference::class,
    ];
}
