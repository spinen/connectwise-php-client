<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStatus Version v2018_4
 *
 * Model for ScheduleStatus
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'showAsTentativeFlag' => 'boolean'
    ];
}
