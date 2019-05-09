<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeam Version v2019_3
 * 
 * Model for ProjectBoardTeam
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference $department
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 */
class ProjectBoardTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Project\SystemDepartmentReference',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
    ];
}
