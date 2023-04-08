<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SLA Version v2018_4
 *
 * Model for SLA
 *
 * @property CalendarReference $customCalendar
 * @property Metadata $_info
 * @property PriorityReference $hiImpactHiUrgency
 * @property PriorityReference $hiImpactLowUrgency
 * @property PriorityReference $hiImpactMedUrgency
 * @property PriorityReference $lowImpactHiUrgency
 * @property PriorityReference $lowImpactLowUrgency
 * @property PriorityReference $lowImpactMedUrgency
 * @property PriorityReference $medImpactHiUrgency
 * @property PriorityReference $medImpactLowUrgency
 * @property PriorityReference $medImpactMedUrgency
 * @property bool $defaultFlag
 * @property float $planWithin
 * @property float $resolutionHours
 * @property float $respondHours
 * @property int $applicationOrder
 * @property int $id
 * @property int $planWithinPercent
 * @property int $resolutionPercent
 * @property int $respondPercent
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
        '_info' => Metadata::class,
        'applicationOrder' => 'integer',
        'basedOn' => 'string',
        'customCalendar' => CalendarReference::class,
        'defaultFlag' => 'boolean',
        'hiImpactHiUrgency' => PriorityReference::class,
        'hiImpactLowUrgency' => PriorityReference::class,
        'hiImpactMedUrgency' => PriorityReference::class,
        'id' => 'integer',
        'lowImpactHiUrgency' => PriorityReference::class,
        'lowImpactLowUrgency' => PriorityReference::class,
        'lowImpactMedUrgency' => PriorityReference::class,
        'medImpactHiUrgency' => PriorityReference::class,
        'medImpactLowUrgency' => PriorityReference::class,
        'medImpactMedUrgency' => PriorityReference::class,
        'name' => 'string',
        'planWithin' => 'float',
        'planWithinPercent' => 'integer',
        'resolutionHours' => 'float',
        'resolutionPercent' => 'integer',
        'respondHours' => 'float',
        'respondPercent' => 'integer',
    ];
}
