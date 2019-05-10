<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriod Version v2018_4
 *
 * Model for TimePeriod
 *
 * @property Metadata $_info
 * @property TimePeriodSetupReference $timePeriodSetup
 * @property integer $id
 * @property integer $period
 * @property string $deadlineDate
 * @property string $endDate
 * @property string $startDate
 */
class TimePeriod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'deadlineDate' => 'string',
        'endDate' => 'string',
        'id' => 'integer',
        'period' => 'integer',
        'startDate' => 'string',
        'timePeriodSetup' => TimePeriodSetupReference::class
    ];
}
