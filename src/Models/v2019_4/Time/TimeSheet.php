<?php

namespace Spinen\ConnectWise\Models\v2019_4\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheet Version v2019_4
 *
 * Model for TimeSheet
 *
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property Carbon $deadline
 * @property MemberReference $member
 * @property Metadata $_info
 * @property float $hours
 * @property int $id
 * @property int $period
 * @property int $year
 * @property string $status
 */
class TimeSheet extends Model
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
        'deadline' => Carbon::class,
        'hours' => 'float',
        'id' => 'integer',
        'member' => MemberReference::class,
        'period' => 'integer',
        'status' => 'string',
        'year' => 'integer',
    ];
}
