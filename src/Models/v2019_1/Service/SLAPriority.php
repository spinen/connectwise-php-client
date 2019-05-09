<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLAPriority Version v2019_1
 * 
 * Model for SLAPriority
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Service\PriorityReference $priority
 * @property number $respondHours
 * @property integer $respondPercent
 * @property number $planWithin
 * @property integer $planWithinPercent
 * @property number $resolutionHours
 * @property integer $resolutionPercent
 * @property Spinen\ConnectWise\Models\v2019_1\Service\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class SLAPriority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'priority' => 'Spinen\ConnectWise\Models\v2019_1\Service\PriorityReference',
        'respondHours' => 'number',
        'respondPercent' => 'integer',
        'planWithin' => 'number',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'number',
        'resolutionPercent' => 'integer',
        'sla' => 'Spinen\ConnectWise\Models\v2019_1\Service\SLAReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
