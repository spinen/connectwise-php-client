<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2018_6
 * 
 * Model for ProjectBoardTeamMember
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2018_6\Project\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 */
class ProjectBoardTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2018_6\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Project\WorkRoleReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
    ];
}
