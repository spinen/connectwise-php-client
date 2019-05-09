<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTeam Version v2018_6
 * 
 * Model for BoardTeam
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $teamLeader
 * @property array $members
 * @property boolean $defaultFlag
 * @property boolean $notifyOnTicketDelete
 * @property integer $boardId
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
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
        'teamLeader' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'members' => 'array',
        'defaultFlag' => 'boolean',
        'notifyOnTicketDelete' => 'boolean',
        'boardId' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
