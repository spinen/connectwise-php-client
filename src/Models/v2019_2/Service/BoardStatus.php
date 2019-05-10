<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatus Version v2019_2
 *
 * Model for BoardStatus
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ExternalIntegrationStatusReference $externalIntegrationXref
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\Service\StatusIndicatorReference $statusIndicator
 * @property boolean $closedStatus
 * @property boolean $customerPortalFlag
 * @property boolean $defaultFlag
 * @property boolean $displayOnBoard
 * @property boolean $inactive
 * @property boolean $timeEntryNotAllowed
 * @property integer $id
 * @property integer $sortOrder
 * @property string $customStatusIndicatorName
 * @property string $customerPortalDescription
 * @property string $escalationStatus
 * @property string $name
 */
class BoardStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Service\BoardReference',
        'closedStatus' => 'boolean',
        'customStatusIndicatorName' => 'string',
        'customerPortalDescription' => 'string',
        'customerPortalFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'displayOnBoard' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceEmailTemplateReference',
        'escalationStatus' => 'string',
        'externalIntegrationXref' => 'Spinen\ConnectWise\Models\v2019_2\Service\ExternalIntegrationStatusReference',
        'id' => 'integer',
        'inactive' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
        'statusIndicator' => 'Spinen\ConnectWise\Models\v2019_2\Service\StatusIndicatorReference',
        'timeEntryNotAllowed' => 'boolean',
    ];
}
