<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2019_2
 * 
 * Model for ProjectBoardTeamMember
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2019_2\Project\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Project\WorkRoleReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
    ];
}
