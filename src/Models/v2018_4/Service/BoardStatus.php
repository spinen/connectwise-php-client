<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatus Version v2018_4
 *
 * Model for BoardStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ExternalIntegrationStatusReference $externalIntegrationXref
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\ServiceEmailTemplateReference $emailTemplate
 * @property boolean $closedStatus
 * @property boolean $customerPortalFlag
 * @property boolean $defaultFlag
 * @property boolean $displayOnBoard
 * @property boolean $inactive
 * @property boolean $timeEntryNotAllowed
 * @property integer $id
 * @property integer $sortOrder
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        'closedStatus' => 'boolean',
        'customerPortalDescription' => 'string',
        'customerPortalFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'displayOnBoard' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_4\Service\ServiceEmailTemplateReference',
        'escalationStatus' => 'string',
        'externalIntegrationXref' => 'Spinen\ConnectWise\Models\v2018_4\Service\ExternalIntegrationStatusReference',
        'id' => 'integer',
        'inactive' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
        'timeEntryNotAllowed' => 'boolean',
    ];
}
