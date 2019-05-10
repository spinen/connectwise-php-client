<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail Version v2019_2
 *
 * Model for ScheduleDetail
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\ScheduleEntryReference $scheduleEntry
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\MemberReference',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\ScheduleEntryReference',
    ];
}
