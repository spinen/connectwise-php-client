<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

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
