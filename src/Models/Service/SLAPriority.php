<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

class SLAPriority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'respondHours' => 'double',
        'respondPercent' => 'integer',
        'planWithin' => 'double',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'double',
        'resolutionPercent' => 'integer',
    ];
}
