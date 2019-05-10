<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRole Version v2018_4
 *
 * Model for ProjectSecurityRole
 *
 * @property integer $id
 * @property string $name
 * @property boolean $managerRoleFlag
 * @property boolean $defaultContactFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Project\Metadata $_info
 */
class ProjectSecurityRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'managerRoleFlag' => 'boolean',
        'defaultContactFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Project\Metadata',
    ];
}
