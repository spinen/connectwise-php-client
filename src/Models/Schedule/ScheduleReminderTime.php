<?php

namespace Spinen\ConnectWise\Models\Schedule;

use Spinen\ConnectWise\Support\Model;

class ScheduleReminderTime extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'time' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
    ];
}
