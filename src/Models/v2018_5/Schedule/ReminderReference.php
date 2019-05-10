<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReminderReference Version v2018_5
 *
 * Model for ReminderReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ReminderReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
