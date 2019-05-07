<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleColor
 *
 * @property integer $id
 * @property integer $startPercent
 * @property integer $endPercent
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
        'id' => 'integer',
        'startPercent' => 'integer',
        'endPercent' => 'integer',
        'color' => 'string',
    ];
}
