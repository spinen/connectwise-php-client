<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingType Version v2018_4
 *
 * Model for ParsingType
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'parseRule' => 'string',
    ];
}
