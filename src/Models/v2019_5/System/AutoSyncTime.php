<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AutoSyncTime Version v2019_5
 *
 * Model for AutoSyncTime
 *
 * @property Metadata $_info
 * @property TimeZoneSetupReference $timeZone
 * @property integer $id
 * @property string $syncTime
 */
class AutoSyncTime extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'syncTime' => 'string',
        'timeZone' => TimeZoneSetupReference::class
    ];
}
