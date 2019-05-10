<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TeamMember Version v2019_1
 *
 * Model for TeamMember
 *
 * @property BoardReference $board
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ServiceTeamReference $team
 * @property boolean $teamLeaderFlag
 * @property integer $id
 */
class TeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'team' => ServiceTeamReference::class,
        'teamLeaderFlag' => 'boolean',
    ];
}
