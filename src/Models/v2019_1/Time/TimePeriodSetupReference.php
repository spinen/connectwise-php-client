<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetupReference Version v2019_1
 *
 * Model for TimePeriodSetupReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Metadata $_info
 * @property integer $id
 */
class TimePeriodSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Time\Metadata',
        'id' => 'integer',
    ];
}
