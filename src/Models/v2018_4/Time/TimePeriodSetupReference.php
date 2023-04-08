<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetupReference Version v2018_4
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
