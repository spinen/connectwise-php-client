<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Priority Version v2018_4
 *
 * Model for Priority
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $color
 * @property string $imageLink
 * @property string $name
 */
class Priority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'color' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'imageLink' => 'string',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
