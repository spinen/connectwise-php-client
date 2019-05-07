<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalCalendar
 *
 * @property integer $id
 * @property string $weekStart
 * @property string $adjust1Start
 * @property string $adjust1End
 * @property double $adjust1Hours
 * @property string $adjust2Start
 * @property string $adjust2End
 * @property double $adjust2Hours
 * @property string $adjust3Start
 * @property string $adjust3End
 * @property double $adjust3Hours
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
        'adjust1Hours' => 'double',
        'adjust2Start' => 'string',
        'adjust2End' => 'string',
        'adjust2Hours' => 'double',
        'adjust3Start' => 'string',
        'adjust3End' => 'string',
        'adjust3Hours' => 'double',
    ];
}
