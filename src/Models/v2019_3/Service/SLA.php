<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLA Version v2019_3
 *
 * Model for SLA
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CalendarReference $customCalendar
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactLowUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactMedUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactLowUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactMedUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactLowUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactMedUrgency
 * @property boolean $defaultFlag
 * @property float $planWithin
 * @property float $resolutionHours
 * @property float $respondHours
 * @property integer $applicationOrder
 * @property integer $id
 * @property integer $planWithinPercent
 * @property integer $resolutionPercent
 * @property integer $respondPercent
 * @property string $basedOn
 * @property string $name
 */
class SLA extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'applicationOrder' => 'integer',
        'basedOn' => 'string',
        'customCalendar' => 'Spinen\ConnectWise\Models\v2019_3\Service\CalendarReference',
        'defaultFlag' => 'boolean',
        'hiImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'hiImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'hiImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'id' => 'integer',
        'lowImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'lowImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'lowImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'name' => 'string',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
    ];
}
