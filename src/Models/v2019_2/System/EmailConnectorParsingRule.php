<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2019_2
 *
 * Model for EmailConnectorParsingRule
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingStyleReference $parsingStyle
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingVariableReference $parsingVariable
 * @property string $searchTerm
 * @property Spinen\ConnectWise\Models\v2019_2\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2019_2\System\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2019_2\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2019_2\System\ServiceSubTypeReference $serviceSubType
 * @property Spinen\ConnectWise\Models\v2019_2\System\ServiceItemReference $serviceItem
 * @property Spinen\ConnectWise\Models\v2019_2\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class EmailConnectorParsingRule extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parsingStyle' => 'Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingStyleReference',
        'priority' => 'integer',
        'parsingVariable' => 'Spinen\ConnectWise\Models\v2019_2\System\EmailConnectorParsingVariableReference',
        'searchTerm' => 'string',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2019_2\System\PriorityReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2019_2\System\ServiceStatusReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_2\System\ServiceTypeReference',
        'serviceSubType' => 'Spinen\ConnectWise\Models\v2019_2\System\ServiceSubTypeReference',
        'serviceItem' => 'Spinen\ConnectWise\Models\v2019_2\System\ServiceItemReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_2\System\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
