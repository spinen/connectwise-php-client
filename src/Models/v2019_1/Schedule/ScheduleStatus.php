<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStatus Version v2019_1
 *
 * Model for ScheduleStatus
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $showAsTentativeFlag
 * @property int $id
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
        'showAsTentativeFlag' => 'boolean',
    ];
}
