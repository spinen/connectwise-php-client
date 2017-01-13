<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class TimeEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'timeStart' => 'carbon',
        'timeEnd' => 'carbon',
        'hoursDeduct' => 'double',
        'actualHours' => 'double',
        'billableOption' => 'string',
        'notes' => 'string',
        'internalNotes' => 'string',
        'addToDetailDescriptionFlag' => 'boolean',
        'addToInternalAnalysisFlag' => 'boolean',
        'addToResolutionFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailCcFlag' => 'boolean',
        'emailCc' => 'string',
        'hoursBilled' => 'double',
        'enteredBy' => 'string',
        'dateEntered' => 'carbon',
        'hourlyRate' => 'double',
        'customFields' => 'array',
    ];
}
