<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone Version v2018_5
 *
 * Model for TimeZone
 *
 * @property Carbon $endDate
 * @property Carbon $startDate
 * @property Metadata $_info
 * @property bool $daylightSavingsFlag
 * @property float $offset
 * @property int $id
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
        'endDate' => Carbon::class,
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'float',
        'startDate' => Carbon::class,
    ];
}
