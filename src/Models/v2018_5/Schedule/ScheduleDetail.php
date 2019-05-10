<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail Version v2018_5
 *
 * Model for ScheduleDetail
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ScheduleEntryReference $scheduleEntry
 * @property integer $id
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
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'scheduleEntry' => ScheduleEntryReference::class,
    ];
}
