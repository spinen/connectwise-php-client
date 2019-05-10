<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetupReference Version v2018_5
 *
 * Model for TimePeriodSetupReference
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 */
class TimePeriodSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
    ];
}
