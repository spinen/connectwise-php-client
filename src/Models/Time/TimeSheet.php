<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class TimeSheet extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'status' => 'string',
        'hours' => 'double',
        'deadline' => 'carbon',
    ];
}
