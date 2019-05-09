<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleColor Version v2018_6
 * 
 * Model for ScheduleColor
 *
 * @property integer $id
 * @property integer $startPercent
 * @property integer $endPercent
 * @property string $color
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 */
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
    ];
}
