<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SetupScreen Version v2018_4
 *
 * Model for SetupScreen
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property integer $id
 * @property string $Description
 * @property string $category
 * @property string $moduleDescription
 * @property string $moduleIdentifier
 * @property string $moduleName
 * @property string $name
 */
class SetupScreen extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Description' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'category' => 'string',
        'id' => 'integer',
        'moduleDescription' => 'string',
        'moduleIdentifier' => 'string',
        'moduleName' => 'string',
        'name' => 'string',
    ];
}
