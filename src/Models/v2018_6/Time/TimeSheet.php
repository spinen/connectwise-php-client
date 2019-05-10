<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheet Version v2018_6
 *
 * Model for TimeSheet
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Time\MemberReference $member
 * @property integer $year
 * @property integer $period
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property string $status
 * @property float $hours
 * @property Carbon\Carbon $deadline
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
 */
class TimeSheet extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Time\MemberReference',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'status' => 'string',
        'hours' => 'float',
        'deadline' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
    ];
}
