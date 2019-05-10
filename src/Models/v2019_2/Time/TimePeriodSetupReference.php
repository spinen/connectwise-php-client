<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetupReference Version v2019_2
 *
 * Model for TimePeriodSetupReference
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
