<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TodayPageCategory Version v2018_5
 *
 * Model for TodayPageCategory
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property integer $id
 * @property integer $sortOrder
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
