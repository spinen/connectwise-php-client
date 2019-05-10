<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStatus Version v2019_3
 *
 * Model for ScheduleStatus
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $showAsTentativeFlag
 * @property integer $id
 * @property string $name
 */
class ScheduleStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'showAsTentativeFlag' => 'boolean',
    ];
}
