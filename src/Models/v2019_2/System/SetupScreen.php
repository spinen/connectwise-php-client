<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SetupScreen Version v2019_2
 *
 * Model for SetupScreen
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'category' => 'string',
        'id' => 'integer',
        'moduleDescription' => 'string',
        'moduleIdentifier' => 'string',
        'moduleName' => 'string',
        'name' => 'string',
    ];
}
