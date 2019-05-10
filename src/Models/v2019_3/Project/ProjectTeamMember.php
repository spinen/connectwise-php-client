<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTeamMember Version v2019_3
 *
 * Model for ProjectTeamMember
 *
 * @property Carbon $endDate
 * @property Carbon $startDate
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ProjectRoleReference $projectRole
 * @property WorkRoleReference $workRole
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
        '_info' => Metadata::class,
        'endDate' => Carbon::class,
        'hours' => 'float',
        'id' => 'integer',
        'member' => MemberReference::class,
        'projectId' => 'integer',
        'projectRole' => ProjectRoleReference::class,
        'startDate' => Carbon::class,
        'workRole' => WorkRoleReference::class
    ];
}
