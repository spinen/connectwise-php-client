<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

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
