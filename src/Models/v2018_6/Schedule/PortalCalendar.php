<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalCalendar Version v2018_6
 *
 * Model for PortalCalendar
 *
 * @property Metadata $_info
 * @property float $adjust1Hours
 * @property float $adjust2Hours
 * @property float $adjust3Hours
 * @property integer $id
 * @property string $adjust1End
 * @property string $adjust1Start
 * @property string $adjust2End
 * @property string $adjust2Start
 * @property string $adjust3End
 * @property string $adjust3Start
 * @property string $weekStart
 */
class PortalCalendar extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'adjust1End' => 'string',
        'adjust1Hours' => 'float',
        'adjust1Start' => 'string',
        'adjust2End' => 'string',
        'adjust2Hours' => 'float',
        'adjust2Start' => 'string',
        'adjust3End' => 'string',
        'adjust3Hours' => 'float',
        'adjust3Start' => 'string',
        'id' => 'integer',
        'weekStart' => 'string'
    ];
}
