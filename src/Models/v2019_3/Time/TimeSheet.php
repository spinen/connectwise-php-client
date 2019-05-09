<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheet Version v2019_3
 * 
 * Model for TimeSheet
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Time\MemberReference $member
 * @property integer $year
 * @property integer $period
 * @property string $dateStart
 * @property string $dateEnd
 * @property string $status
 * @property number $hours
 * @property string $deadline
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Time\MemberReference',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'status' => 'string',
        'hours' => 'number',
        'deadline' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
    ];
}
