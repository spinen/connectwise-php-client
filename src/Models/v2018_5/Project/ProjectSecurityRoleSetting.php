<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectSecurityRoleSetting Version v2018_5
 *
 * Model for ProjectSecurityRoleSetting
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property boolean $myFlag
 * @property integer $id
 * @property string $addLevel
 * @property string $deleteLevel
 * @property string $editLevel
 * @property string $inquireLevel
 * @property string $moduleIdentifier
 */
class ProjectSecurityRoleSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'addLevel' => 'string',
        'deleteLevel' => 'string',
        'editLevel' => 'string',
        'id' => 'integer',
        'inquireLevel' => 'string',
        'moduleIdentifier' => 'string',
        'myFlag' => 'boolean',
    ];
}
