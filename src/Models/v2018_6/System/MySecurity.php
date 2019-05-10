<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MySecurity Version v2018_6
 *
 * Model for MySecurity
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property boolean $customFlag
 * @property boolean $myAllFlag
 * @property boolean $reportFlag
 * @property boolean $restrictFlag
 * @property integer $id
 * @property integer $sortOrder
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
class MySecurity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'addLevel' => 'string',
        'customFlag' => 'boolean',
        'deleteLevel' => 'string',
        'editLevel' => 'string',
        'id' => 'integer',
        'inquireLevel' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\System\MemberReference',
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
