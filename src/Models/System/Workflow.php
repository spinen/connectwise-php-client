<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Workflow extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'activateFlag' => 'boolean',
        'batchInterval' => 'integer',
        'batchFrequencyUnit' => 'string',
        'batchLastRan' => 'carbon',
        'batchSchedule' => 'string',
    ];
}
