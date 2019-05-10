<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TeamMember Version v2019_3
 *
 * Model for TeamMember
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTeamReference $team
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $member
 * @property boolean $teamLeaderFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class TeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'team' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTeamReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        'teamLeaderFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
