<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeam Version v2019_3
 *
 * Model for ProjectBoardTeam
 *
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string'
    ];
}
