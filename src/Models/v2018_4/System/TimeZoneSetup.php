<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetup Version v2018_4
 *
 * Model for TimeZoneSetup
 *
 * @property Metadata $_info
 * @property TimeZoneReference $timeZone
 * @property bool $daylightSavingsFlag
 * @property bool $defaultFlag
 * @property float $offset
 * @property int $id
 * @property string $name
 */
class TimeZoneSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'daylightSavingsFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'float',
        'timeZone' => TimeZoneReference::class,
    ];
}
