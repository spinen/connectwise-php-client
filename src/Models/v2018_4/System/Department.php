<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Department Version v2018_4
 *
 * Model for Department
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class Department extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
