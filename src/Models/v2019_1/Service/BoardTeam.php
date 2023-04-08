<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTeam Version v2019_1
 *
 * Model for BoardTeam
 *
 * @property MemberReference $teamLeader
 * @property Metadata $_info
 * @property array $members
 * @property bool $defaultFlag
 * @property bool $notifyOnTicketDelete
 * @property int $boardId
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
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
