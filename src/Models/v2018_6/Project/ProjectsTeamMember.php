<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectsTeamMember
 *
 * @property integer $id
 * @property integer $projectId
 * @property double $hours
 * @property carbon $startDate
 * @property carbon $endDate
 */
class ProjectsTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
        'hours' => 'double',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
    ];
}
