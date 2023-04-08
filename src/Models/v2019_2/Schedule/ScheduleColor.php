<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleColor Version v2019_2
 *
 * Model for ScheduleColor
 *
 * @property Metadata $_info
 * @property int $endPercent
 * @property int $id
 * @property int $startPercent
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
        '_info' => Metadata::class,
        'color' => 'string',
        'endPercent' => 'integer',
        'id' => 'integer',
        'startPercent' => 'integer',
    ];
}
