<?php

namespace Spinen\ConnectWise\Models\v2019_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriod Version v2019_4
 *
 * Model for TimePeriod
 *
 * @property Metadata $_info
 * @property TimePeriodSetupReference $timePeriodSetup
 * @property int $id
 * @property int $period
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
        'timePeriodSetup' => TimePeriodSetupReference::class,
    ];
}
