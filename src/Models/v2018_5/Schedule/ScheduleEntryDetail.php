<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail Version v2018_5
 * 
 * Model for ScheduleEntryDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\ScheduleEntryReference $scheduleEntry
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property float $hoursScheduled
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata $_info
 */
class ScheduleEntryDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\ScheduleEntryReference',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'hoursScheduled' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata',
    ];
}
