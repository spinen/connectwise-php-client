<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZone
 *
 * @property integer $id
 * @property string $name
 * @property double $offset
 * @property carbon $startDate
 * @property carbon $endDate
 * @property boolean $daylightSavingsFlag
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
        'offset' => 'double',
        'startDate' => 'carbon',
        'endDate' => 'carbon',
        'daylightSavingsFlag' => 'boolean',
    ];
}
