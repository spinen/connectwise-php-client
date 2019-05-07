<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriod
 *
 * @property integer $id
 * @property integer $period
 * @property string $startDate
 * @property string $endDate
 * @property string $deadlineDate
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
        'period' => 'integer',
        'startDate' => 'string',
        'endDate' => 'string',
        'deadlineDate' => 'string',
    ];
}
