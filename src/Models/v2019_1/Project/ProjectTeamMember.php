<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTeamMember Version v2019_1
 *
 * Model for ProjectTeamMember
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2019_1\Project\WorkRoleReference $workRole
 * @property float $hours
 * @property integer $id
 * @property integer $projectId
 */
class ProjectTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'endDate' => 'Carbon\Carbon',
        'hours' => 'float',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'projectId' => 'integer',
        'projectRole' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectRoleReference',
        'startDate' => 'Carbon\Carbon',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Project\WorkRoleReference',
    ];
}
