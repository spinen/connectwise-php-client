<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketStopwatch
 *
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
 * @property boolean $showNotesInDiscussionFlag
 * @property boolean $showNotesInInternalFlag
 * @property boolean $showNotesInResolutionFlag
 * @property boolean $emailNotesToContactFlag
 * @property boolean $emailNotesToResourcesFlag
 */
class TicketStopwatch extends Model
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
        'startTime' => 'carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'showNotesInDiscussionFlag' => 'boolean',
        'showNotesInInternalFlag' => 'boolean',
        'showNotesInResolutionFlag' => 'boolean',
        'emailNotesToContactFlag' => 'boolean',
        'emailNotesToResourcesFlag' => 'boolean',
    ];
}
