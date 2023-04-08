<?php

namespace Spinen\ConnectWise\Models\v2019_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetupReference Version v2019_4
 *
 * Model for TimePeriodSetupReference
 *
 * @property Metadata $_info
 * @property int $id
 */
class TimePeriodSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
    ];
}
