<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AutoSyncTime Version v2019_2
 *
 * Model for AutoSyncTime
 *
 * @property Metadata $_info
 * @property TimeZoneSetupReference $timeZone
 * @property int $id
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
        'timeZone' => TimeZoneSetupReference::class,
    ];
}
