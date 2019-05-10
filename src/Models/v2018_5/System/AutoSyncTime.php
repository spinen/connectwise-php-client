<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AutoSyncTime Version v2018_5
 *
 * Model for AutoSyncTime
 *
 * @property integer $id
 * @property string $syncTime
 * @property Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class AutoSyncTime extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'syncTime' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
