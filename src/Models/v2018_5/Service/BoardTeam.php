<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTeam Version v2018_5
 *
 * Model for BoardTeam
 *
 * @property MemberReference $teamLeader
 * @property Metadata $_info
 * @property array $members
 * @property boolean $defaultFlag
 * @property boolean $notifyOnTicketDelete
 * @property integer $boardId
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property string $name
 */
class BoardTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardId' => 'integer',
        'businessUnitId' => 'integer',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'locationId' => 'integer',
        'members' => 'array',
        'name' => 'string',
        'notifyOnTicketDelete' => 'boolean',
        'teamLeader' => MemberReference::class,
    ];
}
