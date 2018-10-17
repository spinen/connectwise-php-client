<?php

namespace Spinen\ConnectWise\Models\Schedule;

use Spinen\ConnectWise\Support\Model;

class ScheduleDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
    ];
}
