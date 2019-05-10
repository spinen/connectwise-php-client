<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone Version v2019_3
 *
 * Model for TimeZone
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property boolean $daylightSavingsFlag
 * @property float $offset
 * @property integer $id
 * @property string $name
 */
class TimeZone extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'daylightSavingsFlag' => 'boolean',
        'endDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'float',
        'startDate' => 'Carbon\Carbon',
    ];
}
