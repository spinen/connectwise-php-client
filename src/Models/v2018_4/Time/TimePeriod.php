<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriod Version v2018_4
 * 
 * Model for TimePeriod
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Time\TimePeriodSetupReference $timePeriodSetup
 * @property integer $period
 * @property string $startDate
 * @property string $endDate
 * @property string $deadlineDate
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 */
class TimePeriod extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'timePeriodSetup' => 'Spinen\ConnectWise\Models\v2018_4\Time\TimePeriodSetupReference',
        'period' => 'integer',
        'startDate' => 'string',
        'endDate' => 'string',
        'deadlineDate' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
    ];
}
