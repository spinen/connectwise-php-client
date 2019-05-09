<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRoleSetting Version v2018_5
 * 
 * Model for ProjectSecurityRoleSetting
 *
 * @property integer $id
 * @property string $addLevel
 * @property string $editLevel
 * @property string $deleteLevel
 * @property string $inquireLevel
 * @property string $moduleIdentifier
 * @property boolean $myFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
    ];
}
