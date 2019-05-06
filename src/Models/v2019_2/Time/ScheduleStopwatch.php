<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

class ScheduleStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'carbon',
        'endTime' => 'carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'notes' => 'string',
        'scheduleId' => 'integer',
        'startTime' => 'carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
    ];
}
