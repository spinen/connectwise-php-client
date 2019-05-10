<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingType Version v2019_3
 *
 * Model for ParsingType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 * @property string $parseRule
 */
class ParsingType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'parseRule' => 'string',
    ];
}
