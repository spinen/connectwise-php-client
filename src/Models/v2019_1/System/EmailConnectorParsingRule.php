<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2019_1
 *
 * Model for EmailConnectorParsingRule
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingStyleReference $parsingStyle
 * @property Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingVariableReference $parsingVariable
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference $serviceItem
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference $serviceSubType
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference $serviceType
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'parsingStyle' => 'Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingStyleReference',
        'parsingVariable' => 'Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingVariableReference',
        'priority' => 'integer',
        'searchTerm' => 'string',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        'serviceItem' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2019_1\System\PriorityReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference',
        'serviceSubType' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference',
    ];
}
