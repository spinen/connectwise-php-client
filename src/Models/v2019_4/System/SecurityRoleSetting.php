<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRoleSetting Version v2019_4
 *
 * Model for SecurityRoleSetting
 *
 * @property Metadata $_info
 * @property bool $customFlag
 * @property bool $myAllFlag
 * @property bool $reportFlag
 * @property bool $restrictFlag
 * @property int $id
 * @property int $sortOrder
 * @property string $addLevel
 * @property string $deleteLevel
 * @property string $editLevel
 * @property string $inquireLevel
 * @property string $moduleDescription
 * @property string $moduleFunctionDescription
 * @property string $moduleFunctionIdentifier
 * @property string $moduleFunctionName
 * @property string $moduleIdentifier
 * @property string $moduleName
 */
class SecurityRoleSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addLevel' => 'string',
        'customFlag' => 'boolean',
        'deleteLevel' => 'string',
        'editLevel' => 'string',
        'id' => 'integer',
        'inquireLevel' => 'string',
        'moduleDescription' => 'string',
        'moduleFunctionDescription' => 'string',
        'moduleFunctionIdentifier' => 'string',
        'moduleFunctionName' => 'string',
        'moduleIdentifier' => 'string',
        'moduleName' => 'string',
        'myAllFlag' => 'boolean',
        'reportFlag' => 'boolean',
        'restrictFlag' => 'boolean',
        'sortOrder' => 'integer',
    ];
}
