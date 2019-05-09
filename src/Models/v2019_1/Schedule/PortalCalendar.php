<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalCalendar Version v2019_1
 * 
 * Model for PortalCalendar
 *
 * @property integer $id
 * @property string $weekStart
 * @property string $adjust1Start
 * @property string $adjust1End
 * @property number $adjust1Hours
 * @property string $adjust2Start
 * @property string $adjust2End
 * @property number $adjust2Hours
 * @property string $adjust3Start
 * @property string $adjust3End
 * @property number $adjust3Hours
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata $_info
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
        'adjust1Hours' => 'number',
        'adjust2Start' => 'string',
        'adjust2End' => 'string',
        'adjust2Hours' => 'number',
        'adjust3Start' => 'string',
        'adjust3End' => 'string',
        'adjust3Hours' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata',
    ];
}
