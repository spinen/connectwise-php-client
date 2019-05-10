<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLA Version v2019_3
 *
 * Model for SLA
 *
 * @property integer $id
 * @property string $name
 * @property string $basedOn
 * @property Spinen\ConnectWise\Models\v2019_3\Service\CalendarReference $customCalendar
 * @property boolean $defaultFlag
 * @property integer $applicationOrder
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactMedUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $hiImpactLowUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactMedUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $medImpactLowUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactHiUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactMedUrgency
 * @property Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference $lowImpactLowUrgency
 * @property float $respondHours
 * @property integer $respondPercent
 * @property float $planWithin
 * @property integer $planWithinPercent
 * @property float $resolutionHours
 * @property integer $resolutionPercent
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
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
        'customCalendar' => 'Spinen\ConnectWise\Models\v2019_3\Service\CalendarReference',
        'defaultFlag' => 'boolean',
        'applicationOrder' => 'integer',
        'hiImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'hiImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'hiImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'medImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'lowImpactHiUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'lowImpactMedUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'lowImpactLowUrgency' => 'Spinen\ConnectWise\Models\v2019_3\Service\PriorityReference',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
