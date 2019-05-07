<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingType
 *
 * @property integer $id
 * @property string $name
 * @property string $parseRule
 * @property boolean $defaultFlag
 */
class ParsingType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parseRule' => 'string',
        'defaultFlag' => 'boolean',
    ];
}
