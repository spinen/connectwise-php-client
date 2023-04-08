<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo Version v2018_5
 *
 * Model for LocationInfo
 *
 * @property Metadata $_info
 * @property bool $location_flag
 * @property int $id
 * @property string $name
 */
class LocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location_flag' => 'boolean',
        'name' => 'string',
    ];
}
