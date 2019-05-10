<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalCalendar Version v2018_6
 *
 * Model for PortalCalendar
 *
 * @property integer $id
 * @property string $weekStart
 * @property string $adjust1Start
 * @property string $adjust1End
 * @property float $adjust1Hours
 * @property string $adjust2Start
 * @property string $adjust2End
 * @property float $adjust2Hours
 * @property string $adjust3Start
 * @property string $adjust3End
 * @property float $adjust3Hours
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 */
class PortalCalendar extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'weekStart' => 'string',
        'adjust1Start' => 'string',
        'adjust1End' => 'string',
        'adjust1Hours' => 'float',
        'adjust2Start' => 'string',
        'adjust2End' => 'string',
        'adjust2Hours' => 'float',
        'adjust3Start' => 'string',
        'adjust3End' => 'string',
        'adjust3Hours' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
    ];
}
