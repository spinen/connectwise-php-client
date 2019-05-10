<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2018_4
 *
 * Model for ProjectBoardTeamMember
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2018_4\Project\WorkRoleReference $workRole
 * @property integer $id
 */
class ProjectBoardTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Project\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2018_4\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Project\WorkRoleReference',
    ];
}
