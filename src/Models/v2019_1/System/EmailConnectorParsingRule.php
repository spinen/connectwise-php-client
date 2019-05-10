<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingRule Version v2019_1
 *
 * Model for EmailConnectorParsingRule
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingStyleReference $parsingStyle
 * @property integer $priority
 * @property Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingVariableReference $parsingVariable
 * @property string $searchTerm
 * @property Spinen\ConnectWise\Models\v2019_1\System\PriorityReference $servicePriority
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference $serviceStatus
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference $serviceSubType
 * @property Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference $serviceItem
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'parsingStyle' => 'Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingStyleReference',
        'priority' => 'integer',
        'parsingVariable' => 'Spinen\ConnectWise\Models\v2019_1\System\EmailConnectorParsingVariableReference',
        'searchTerm' => 'string',
        'servicePriority' => 'Spinen\ConnectWise\Models\v2019_1\System\PriorityReference',
        'serviceStatus' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceStatusReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceTypeReference',
        'serviceSubType' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceSubTypeReference',
        'serviceItem' => 'Spinen\ConnectWise\Models\v2019_1\System\ServiceItemReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
