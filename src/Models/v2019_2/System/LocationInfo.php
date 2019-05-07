<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo
 *
 * @property integer $id
 * @property string $name
 * @property boolean $location_flag
 */
class LocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'location_flag' => 'boolean',
    ];
}
