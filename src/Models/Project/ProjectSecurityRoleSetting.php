<?php

namespace Spinen\ConnectWise\Models\Project;

use Spinen\ConnectWise\Support\Model;

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
