<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Service extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'srNotify' => 'string',
        'scheduleSpan' => 'string',
        'hideDelimiterFlag' => 'boolean',
        'allowCCFlag' => 'boolean',
        'allowTOFlag' => 'boolean',
        'headerColor' => 'string',
        'memberColor' => 'string',
        'contactColor' => 'string',
        'unknownColor' => 'string',
        'headerColorDisableFlag' => 'boolean',
        'memberColorDisableFlag' => 'boolean',
        'contactColorDisableFlag' => 'boolean',
        'unknownColorDisableFlag' => 'boolean',
    ];
}
