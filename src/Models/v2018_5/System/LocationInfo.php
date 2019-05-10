<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo Version v2018_5
 *
 * Model for LocationInfo
 *
 * @property integer $id
 * @property string $name
 * @property boolean $location_flag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
