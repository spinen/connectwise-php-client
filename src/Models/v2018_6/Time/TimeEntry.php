<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntry Version v2018_6
 *
 * Model for TimeEntry
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Time\CompanyReference $company
 * @property integer $chargeToId
 * @property string $chargeToType
 * @property Spinen\ConnectWise\Models\v2018_6\Time\MemberReference $member
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_6\Time\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2018_6\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Time\AgreementReference $agreement
 * @property Carbon\Carbon $timeStart
 * @property Carbon\Carbon $timeEnd
 * @property float $hoursDeduct
 * @property float $actualHours
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
 * @property float $hoursBilled
 * @property string $enteredBy
 * @property Carbon\Carbon $dateEntered
 * @property Spinen\ConnectWise\Models\v2018_6\Time\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Guid $mobileGuid
 * @property float $hourlyRate
 * @property Spinen\ConnectWise\Models\v2018_6\Time\TimeSheetReference $timeSheet
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Time\CompanyReference',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Time\MemberReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Time\WorkTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Time\WorkRoleReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Time\AgreementReference',
        'timeStart' => 'Carbon\Carbon',
        'timeEnd' => 'Carbon\Carbon',
        'hoursDeduct' => 'float',
        'actualHours' => 'float',
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
        'hoursBilled' => 'float',
        'enteredBy' => 'string',
        'dateEntered' => 'Carbon\Carbon',
        'invoice' => 'Spinen\ConnectWise\Models\v2018_6\Time\InvoiceReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Time\Guid',
        'hourlyRate' => 'float',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2018_6\Time\TimeSheetReference',
        'status' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
        'customFields' => 'array',
    ];
}
