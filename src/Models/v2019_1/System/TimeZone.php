<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone Version v2019_1
 *
 * Model for TimeZone
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'daylightSavingsFlag' => 'boolean',
        'endDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'float',
        'startDate' => Carbon\Carbon::class,
    ];
}
