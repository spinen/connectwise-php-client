<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MySecurity Version v2018_5
 * 
 * Model for MySecurity
 *
 * @property integer $id
 * @property string $addLevel
 * @property string $editLevel
 * @property string $deleteLevel
 * @property string $inquireLevel
 * @property string $moduleFunctionName
 * @property string $moduleFunctionDescription
 * @property boolean $myAllFlag
 * @property string $moduleFunctionIdentifier
 * @property boolean $reportFlag
 * @property boolean $restrictFlag
 * @property boolean $customFlag
 * @property string $moduleDescription
 * @property string $moduleIdentifier
 * @property string $moduleName
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class MySecurity extends Model
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
        'member' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
