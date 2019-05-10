<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryReference Version v2019_3
 *
 * Model for ScheduleEntryReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property integer $id
 * @property string $description
 */
class ScheduleEntryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'description' => 'string',
        'id' => 'integer',
    ];
}
