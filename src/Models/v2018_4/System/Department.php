<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Department
 *
 * @property integer $id
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
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
