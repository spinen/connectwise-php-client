<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleColor Version v2018_5
 *
 * Model for ScheduleColor
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata $_info
 * @property integer $endPercent
 * @property integer $id
 * @property integer $startPercent
 * @property string $color
 */
class ScheduleColor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata',
        'color' => 'string',
        'endPercent' => 'integer',
        'id' => 'integer',
        'startPercent' => 'integer',
    ];
}
