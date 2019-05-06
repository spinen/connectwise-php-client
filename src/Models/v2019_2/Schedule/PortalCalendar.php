<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

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
