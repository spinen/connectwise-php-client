<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriod Version v2018_6
 *
 * Model for TimePeriod
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Time\TimePeriodSetupReference $timePeriodSetup
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
        'deadlineDate' => 'string',
        'endDate' => 'string',
        'id' => 'integer',
        'period' => 'integer',
        'startDate' => 'string',
        'timePeriodSetup' => 'Spinen\ConnectWise\Models\v2018_6\Time\TimePeriodSetupReference',
    ];
}
