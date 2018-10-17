<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

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
