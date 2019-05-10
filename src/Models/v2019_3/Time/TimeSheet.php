<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheet Version v2019_3
 *
 * Model for TimeSheet
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $deadline
 * @property MemberReference $member
 * @property Metadata $_info
 * @property float $hours
 * @property integer $id
 * @property integer $period
 * @property integer $year
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
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'deadline' => Carbon\Carbon::class,
        'hours' => 'float',
        'id' => 'integer',
        'member' => MemberReference::class,
        'period' => 'integer',
        'status' => 'string',
        'year' => 'integer',
    ];
}
