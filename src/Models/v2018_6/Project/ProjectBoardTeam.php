<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeam Version v2018_6
 *
 * Model for ProjectBoardTeam
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Project\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Project\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Project\SystemLocationReference',
        'name' => 'string',
    ];
}
