<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTeamMember Version v2018_5
 *
 * Model for ProjectTeamMember
 *
 * @property integer $id
 * @property integer $projectId
 * @property float $hours
 * @property Spinen\ConnectWise\Models\v2018_5\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2018_5\Project\WorkRoleReference $workRole
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
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
        'hours' => 'float',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2018_5\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Project\WorkRoleReference',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
    ];
}
