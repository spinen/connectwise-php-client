<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

class BoardTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'members' => 'array',
        'defaultFlag' => 'boolean',
        'notifyOnTicketDelete' => 'boolean',
        'boardId' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
    ];
}
