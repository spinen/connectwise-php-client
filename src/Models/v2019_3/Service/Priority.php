<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Priority
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property integer $sortOrder
 * @property boolean $defaultFlag
 * @property string $imageLink
 */
class Priority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'color' => 'string',
        'sortOrder' => 'integer',
        'defaultFlag' => 'boolean',
        'imageLink' => 'string',
    ];
}
