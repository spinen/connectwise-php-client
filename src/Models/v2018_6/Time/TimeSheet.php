<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheet Version v2018_6
 *
 * Model for TimeSheet
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $deadline
 * @property Spinen\ConnectWise\Models\v2018_6\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'deadline' => 'Carbon\Carbon',
        'hours' => 'float',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Time\MemberReference',
        'period' => 'integer',
        'status' => 'string',
        'year' => 'integer',
    ];
}
