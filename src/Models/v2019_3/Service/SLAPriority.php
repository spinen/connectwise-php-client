<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLAPriority Version v2019_3
 *
 * Model for SLAPriority
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $priority
 * @property float $respondHours
 * @property integer $respondPercent
 * @property float $planWithin
 * @property integer $planWithinPercent
 * @property float $resolutionHours
 * @property integer $resolutionPercent
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
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
        'priority' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Service\SLAReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
