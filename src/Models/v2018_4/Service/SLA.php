<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLA
 *
 * @property integer $id
 * @property string $name
 * @property string $basedOn
 * @property boolean $defaultFlag
 * @property integer $applicationOrder
 * @property double $respondHours
 * @property integer $respondPercent
 * @property double $planWithin
 * @property integer $planWithinPercent
 * @property double $resolutionHours
 * @property integer $resolutionPercent
 */
class SLA extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'basedOn' => 'string',
        'defaultFlag' => 'boolean',
        'applicationOrder' => 'integer',
        'respondHours' => 'double',
        'respondPercent' => 'integer',
        'planWithin' => 'double',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'double',
        'resolutionPercent' => 'integer',
    ];
}
