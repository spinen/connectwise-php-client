<?php

namespace Spinen\ConnectWise\Models\v2019_4\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail Version v2019_4
 *
 * Model for ScheduleDetail
 *
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ScheduleEntryReference $scheduleEntry
 * @property int $id
 */
class ScheduleDetail extends Model
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
        'id' => 'integer',
        'member' => MemberReference::class,
        'scheduleEntry' => ScheduleEntryReference::class,
    ];
}
