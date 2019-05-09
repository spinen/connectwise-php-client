<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTeamMember Version v2018_6
 * 
 * Model for ProjectTeamMember
 *
 * @property integer $id
 * @property integer $projectId
 * @property number $hours
 * @property Spinen\ConnectWise\Models\v2018_6\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2018_6\Project\WorkRoleReference $workRole
 * @property string $startDate
 * @property string $endDate
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 */
class ProjectTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
        'hours' => 'number',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2018_6\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Project\WorkRoleReference',
        'startDate' => 'string',
        'endDate' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
    ];
}
