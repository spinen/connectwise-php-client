<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRole Version v2018_6
 *
 * Model for ProjectSecurityRole
 *
 * @property Metadata $_info
 * @property boolean $defaultContactFlag
 * @property boolean $managerRoleFlag
 * @property integer $id
 * @property string $name
 */
class ProjectSecurityRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultContactFlag' => 'boolean',
        'id' => 'integer',
        'managerRoleFlag' => 'boolean',
        'name' => 'string',
    ];
}
