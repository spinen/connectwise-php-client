<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone Version v2018_4
 * 
 * Model for TimeZone
 *
 * @property integer $id
 * @property string $name
 * @property float $offset
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property boolean $daylightSavingsFlag
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        'offset' => 'float',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'daylightSavingsFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
