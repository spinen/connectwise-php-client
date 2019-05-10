<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTeam Version v2019_2
 *
 * Model for BoardTeam
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $teamLeader
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'boardId' => 'integer',
        'businessUnitId' => 'integer',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'locationId' => 'integer',
        'members' => 'array',
        'name' => 'string',
        'notifyOnTicketDelete' => 'boolean',
        'teamLeader' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
    ];
}
