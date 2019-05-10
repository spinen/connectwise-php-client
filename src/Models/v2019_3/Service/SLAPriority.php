<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLAPriority Version v2019_3
 *
 * Model for SLAPriority
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SLAReference $sla
 * @property float $planWithin
 * @property float $resolutionHours
 * @property float $respondHours
 * @property integer $id
 * @property integer $planWithinPercent
 * @property integer $resolutionPercent
 * @property integer $respondPercent
 */
class SLAPriority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'id' => 'integer',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'priority' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Service\SLAReference',
    ];
}
