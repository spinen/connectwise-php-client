<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStopwatch
 *
 * @property integer $activityId
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property carbon $dateEntered
 * @property carbon $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property string $notes
 * @property carbon $startTime
 * @property string $status
 * @property integer $totalPauseTime
 */
class ActivityStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'activityId' => 'integer',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'carbon',
        'endTime' => 'carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'notes' => 'string',
        'startTime' => 'carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
    ];
}
