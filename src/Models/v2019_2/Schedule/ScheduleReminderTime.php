<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleReminderTime
 *
 * @property integer $id
 * @property integer $time
 * @property string $name
 * @property boolean $defaultFlag
 */
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
