<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

class SecurityRoleSetting extends Model
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
        'moduleFunctionName' => 'string',
        'moduleFunctionDescription' => 'string',
        'myAllFlag' => 'boolean',
        'moduleFunctionIdentifier' => 'string',
        'reportFlag' => 'boolean',
        'restrictFlag' => 'boolean',
        'customFlag' => 'boolean',
        'moduleDescription' => 'string',
        'moduleIdentifier' => 'string',
        'moduleName' => 'string',
        'sortOrder' => 'integer',
    ];
}
