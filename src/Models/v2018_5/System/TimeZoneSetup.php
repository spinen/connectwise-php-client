<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetup Version v2018_5
 * 
 * Model for TimeZoneSetup
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\System\TimeZoneReference $timeZone
 * @property number $offset
 * @property boolean $defaultFlag
 * @property boolean $daylightSavingsFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class TimeZoneSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_5\System\TimeZoneReference',
        'offset' => 'number',
        'defaultFlag' => 'boolean',
        'daylightSavingsFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
