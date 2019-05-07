<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntry
 *
 * @property integer $id
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property carbon $timeStart
 * @property carbon $timeEnd
 * @property double $hoursDeduct
 * @property double $actualHours
 * @property string $billableOption
 * @property string $notes
 * @property string $internalNotes
 * @property boolean $addToDetailDescriptionFlag
 * @property boolean $addToInternalAnalysisFlag
 * @property boolean $addToResolutionFlag
 * @property boolean $emailResourceFlag
 * @property boolean $emailContactFlag
 * @property boolean $emailCcFlag
 * @property string $emailCc
 * @property double $hoursBilled
 * @property string $enteredBy
 * @property carbon $dateEntered
 * @property double $hourlyRate
 * @property string $status
 * @property array $customFields
 */
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
        'status' => 'string',
        'customFields' => 'array',
    ];
}
