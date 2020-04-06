<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2019_5
 *
 * Model for EmailConnectorParsingRule
 *
 * @property BoardReference $serviceBoard
 * @property EmailConnectorParsingStyleReference $parsingStyle
 * @property EmailConnectorParsingVariableReference $parsingVariable
 * @property Metadata $_info
 * @property PriorityReference $servicePriority
 * @property ServiceItemReference $serviceItem
 * @property ServiceStatusReference $serviceStatus
 * @property ServiceSubTypeReference $serviceSubType
 * @property ServiceTypeReference $serviceType
 * @property integer $id
 * @property integer $priority
 * @property string $searchTerm
 */
class EmailConnectorParsingRule extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'parsingStyle' => EmailConnectorParsingStyleReference::class,
        'parsingVariable' => EmailConnectorParsingVariableReference::class,
        'priority' => 'integer',
        'searchTerm' => 'string',
        'serviceBoard' => BoardReference::class,
        'serviceItem' => ServiceItemReference::class,
        'servicePriority' => PriorityReference::class,
        'serviceStatus' => ServiceStatusReference::class,
        'serviceSubType' => ServiceSubTypeReference::class,
        'serviceType' => ServiceTypeReference::class
    ];
}
