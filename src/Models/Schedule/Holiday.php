<?php

namespace Spinen\ConnectWise\Models\Schedule;

use Spinen\ConnectWise\Support\Model;

class Holiday extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'allDayFlag' => 'boolean',
        'date' => 'string',
        'timeStart' => 'string',
        'timeEnd' => 'string',
    ];
}
