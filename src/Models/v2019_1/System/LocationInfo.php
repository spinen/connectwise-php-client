<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo Version v2019_1
 *
 * Model for LocationInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property boolean $location_flag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'location_flag' => 'boolean',
        'name' => 'string',
    ];
}
