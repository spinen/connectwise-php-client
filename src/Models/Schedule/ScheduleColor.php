<?php

namespace Spinen\ConnectWise\Models\Schedule;

use Spinen\ConnectWise\Support\Model;

class ScheduleColor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'startPercent' => 'integer',
        'endPercent' => 'integer',
        'color' => 'string',
    ];
}
