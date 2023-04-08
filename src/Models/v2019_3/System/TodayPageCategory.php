<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TodayPageCategory Version v2019_3
 *
 * Model for TodayPageCategory
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property int $id
 * @property int $sortOrder
 * @property string $name
 */
class TodayPageCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
