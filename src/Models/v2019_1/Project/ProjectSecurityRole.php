<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRole
 *
 * @property integer $id
 * @property string $name
 * @property boolean $managerRoleFlag
 * @property boolean $defaultContactFlag
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
    ];
}
