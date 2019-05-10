<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2018_4
 *
 * Model for EmailConnectorParsingRule
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingStyleReference $parsingStyle
 * @property Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingVariableReference $parsingVariable
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceItemReference $serviceItem
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceSubTypeReference $serviceSubType
 * @property Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference $serviceType
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'id' => 'integer',
        'parsingStyle' => 'Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingStyleReference',
        'parsingVariable' => 'Spinen\ConnectWise\Models\v2018_4\System\EmailConnectorParsingVariableReference',
        'priority' => 'integer',
        'searchTerm' => 'string',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2018_4\System\BoardReference',
        'serviceItem' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceItemReference',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2018_4\System\PriorityReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceStatusReference',
        'serviceSubType' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceSubTypeReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_4\System\ServiceTypeReference',
    ];
}
