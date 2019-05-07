<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLAPriority
 *
 * @property integer $id
 * @property double $respondHours
 * @property integer $respondPercent
 * @property double $planWithin
 * @property integer $planWithinPercent
 * @property double $resolutionHours
 * @property integer $resolutionPercent
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
        'respondHours' => 'double',
        'respondPercent' => 'integer',
        'planWithin' => 'double',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'double',
        'resolutionPercent' => 'integer',
    ];
}
