<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch
 *
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property carbon $dateEntered
 * @property carbon $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property string $notes
 * @property integer $scheduleId
 * @property carbon $startTime
 * @property string $status
 * @property integer $totalPauseTime
 */
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
