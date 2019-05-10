<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail Version v2018_4
 *
 * Model for ScheduleEntryDetail
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleEntryReference $scheduleEntry
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'hoursScheduled' => 'float',
        'id' => 'integer',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleEntryReference',
    ];
}
