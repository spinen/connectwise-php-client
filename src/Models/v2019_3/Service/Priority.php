<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Priority Version v2019_3
 *
 * Model for Priority
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'color' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'imageLink' => 'string',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
