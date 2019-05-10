<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingType Version v2018_5
 *
 * Model for ParsingType
 *
 * @property integer $id
 * @property string $name
 * @property string $parseRule
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
