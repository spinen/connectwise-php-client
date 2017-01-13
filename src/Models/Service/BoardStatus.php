<?php

namespace Spinen\ConnectWise\Models\Service;

use Spinen\ConnectWise\Support\Model;

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
        'boardId' => 'integer',
        'sortOrder' => 'integer',
        'displayOnBoard' => 'boolean',
        'inactive' => 'boolean',
        'closedStatus' => 'boolean',
        'timeEntryNotAllowed' => 'boolean',
        'defaultFlag' => 'boolean',
        'escalationStatus' => 'string',
    ];
}
