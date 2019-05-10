<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleReminderTime Version v2019_2
 *
 * Model for ScheduleReminderTime
 *
 * @property integer $id
 * @property integer $time
 * @property string $name
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata',
    ];
}
