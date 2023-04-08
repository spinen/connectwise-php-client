<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLAPriority Version v2019_5
 *
 * Model for SLAPriority
 *
 * @property Metadata $_info
 * @property PriorityReference $priority
 * @property SLAReference $sla
 * @property float $planWithin
 * @property float $resolutionHours
 * @property float $respondHours
 * @property int $id
 * @property int $planWithinPercent
 * @property int $resolutionPercent
 * @property int $respondPercent
 */
class SLAPriority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'priority' => PriorityReference::class,
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
        'sla' => SLAReference::class,
    ];
}
