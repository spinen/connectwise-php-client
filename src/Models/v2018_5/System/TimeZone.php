<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone Version v2018_5
 * 
 * Model for TimeZone
 *
 * @property integer $id
 * @property string $name
 * @property number $offset
 * @property string $startDate
 * @property string $endDate
 * @property boolean $daylightSavingsFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class TimeZone extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'number',
        'startDate' => 'string',
        'endDate' => 'string',
        'daylightSavingsFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
