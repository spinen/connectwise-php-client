<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRoleSetting
 *
 * @property integer $id
 * @property string $addLevel
 * @property string $editLevel
 * @property string $deleteLevel
 * @property string $inquireLevel
 * @property string $moduleIdentifier
 * @property boolean $myFlag
 */
class ProjectSecurityRoleSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'addLevel' => 'string',
        'editLevel' => 'string',
        'deleteLevel' => 'string',
        'inquireLevel' => 'string',
        'moduleIdentifier' => 'string',
        'myFlag' => 'boolean',
    ];
}
