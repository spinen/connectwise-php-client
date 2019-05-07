<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetup
 *
 * @property integer $id
 * @property string $name
 * @property double $offset
 * @property boolean $defaultFlag
 * @property boolean $daylightSavingsFlag
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
        'offset' => 'double',
        'defaultFlag' => 'boolean',
        'daylightSavingsFlag' => 'boolean',
    ];
}
