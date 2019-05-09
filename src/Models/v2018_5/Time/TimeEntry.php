<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntry Version v2018_5
 * 
 * Model for TimeEntry
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Time\CompanyReference $company
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property Spinen\ConnectWise\Models\v2018_5\Time\MemberReference $member
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference $agreement
 * @property string $timeStart
 * @property string $timeEnd
 * @property number $hoursDeduct
 * @property number $actualHours
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
 * @property number $hoursBilled
 * @property string $enteredBy
 * @property string $dateEntered
 * @property Spinen\ConnectWise\Models\v2018_5\Time\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Guid $mobileGuid
 * @property number $hourlyRate
 * @property Spinen\ConnectWise\Models\v2018_5\Time\TimeSheetReference $timeSheet
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Time\CompanyReference',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Time\MemberReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference',
        'timeStart' => 'string',
        'timeEnd' => 'string',
        'hoursDeduct' => 'number',
        'actualHours' => 'number',
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
        'hoursBilled' => 'number',
        'enteredBy' => 'string',
        'dateEntered' => 'string',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_5\Time\InvoiceReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Time\Guid',
        'hourlyRate' => 'number',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2018_5\Time\TimeSheetReference',
        'status' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'customFields' => 'array',
    ];
}
