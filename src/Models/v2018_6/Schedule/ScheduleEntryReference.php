<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryReference Version v2018_6
 * 
 * Model for ScheduleEntryReference
 *
 * @property integer $id
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 */
class ScheduleEntryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
    ];
}
