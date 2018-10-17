<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class TimeZone extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'double',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'daylightSavingsFlag' => 'boolean',
    ];
}
