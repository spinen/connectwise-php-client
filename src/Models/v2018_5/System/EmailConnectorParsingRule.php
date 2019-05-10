<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2018_5
 *
 * Model for EmailConnectorParsingRule
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingStyleReference $parsingStyle
 * @property Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingVariableReference $parsingVariable
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceItemReference $serviceItem
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceSubTypeReference $serviceSubType
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceTypeReference $serviceType
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'id' => 'integer',
        'parsingStyle' => 'Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingStyleReference',
        'parsingVariable' => 'Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingVariableReference',
        'priority' => 'integer',
        'searchTerm' => 'string',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2018_5\System\BoardReference',
        'serviceItem' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceItemReference',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2018_5\System\PriorityReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceStatusReference',
        'serviceSubType' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceSubTypeReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceTypeReference',
    ];
}
