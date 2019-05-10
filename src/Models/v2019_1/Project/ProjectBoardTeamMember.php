<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2019_1
 *
 * Model for ProjectBoardTeamMember
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2019_1\Project\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Project\WorkRoleReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
    ];
}
