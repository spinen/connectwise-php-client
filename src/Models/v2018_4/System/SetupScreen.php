<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SetupScreen Version v2018_4
 *
 * Model for SetupScreen
 *
 * @property integer $id
 * @property string $category
 * @property string $name
 * @property string $Description
 * @property string $moduleDescription
 * @property string $moduleIdentifier
 * @property string $moduleName
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class SetupScreen extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'string',
        'name' => 'string',
        'Description' => 'string',
        'moduleDescription' => 'string',
        'moduleIdentifier' => 'string',
        'moduleName' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
