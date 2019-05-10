<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeam Version v2019_3
 *
 * Model for ProjectBoardTeam
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference $location
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class ProjectBoardTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference',
        'name' => 'string',
    ];
}
