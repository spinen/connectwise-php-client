<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatus Version v2019_3
 * 
 * Model for BoardStatus
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ExternalIntegrationStatusReference $externalIntegrationXref
 * @property integer $sortOrder
 * @property boolean $displayOnBoard
 * @property boolean $inactive
 * @property boolean $closedStatus
 * @property boolean $timeEntryNotAllowed
 * @property boolean $defaultFlag
 * @property string $escalationStatus
 * @property string $customerPortalDescription
 * @property boolean $customerPortalFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceEmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Service\StatusIndicatorReference $statusIndicator
 * @property string $customStatusIndicatorName
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class BoardStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'externalIntegrationXref' => 'Spinen\ConnectWise\Models\v2019_3\Service\ExternalIntegrationStatusReference',
        'sortOrder' => 'integer',
        'displayOnBoard' => 'boolean',
        'inactive' => 'boolean',
        'closedStatus' => 'boolean',
        'timeEntryNotAllowed' => 'boolean',
        'defaultFlag' => 'boolean',
        'escalationStatus' => 'string',
        'customerPortalDescription' => 'string',
        'customerPortalFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceEmailTemplateReference',
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2019_3\Service\StatusIndicatorReference',
        'customStatusIndicatorName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
