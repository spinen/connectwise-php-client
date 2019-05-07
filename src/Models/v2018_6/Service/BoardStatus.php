<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatus
 *
 * @property integer $id
 * @property string $name
 * @property integer $sortOrder
 * @property boolean $displayOnBoard
 * @property boolean $inactive
 * @property boolean $closedStatus
 * @property boolean $timeEntryNotAllowed
 * @property boolean $defaultFlag
 * @property string $escalationStatus
 * @property string $customerPortalDescription
 * @property boolean $customerPortalFlag
 * @property string $customStatusIndicatorName
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
        'sortOrder' => 'integer',
        'displayOnBoard' => 'boolean',
        'inactive' => 'boolean',
        'closedStatus' => 'boolean',
        'timeEntryNotAllowed' => 'boolean',
        'defaultFlag' => 'boolean',
        'escalationStatus' => 'string',
        'customerPortalDescription' => 'string',
        'customerPortalFlag' => 'boolean',
        'customStatusIndicatorName' => 'string',
    ];
}
