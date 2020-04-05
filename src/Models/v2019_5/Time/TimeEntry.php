<?php

namespace Spinen\ConnectWise\Models\v2019_5\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntry Version v2019_5
 *
 * Model for TimeEntry
 *
 * @property AgreementReference $agreement
 * @property Carbon $dateEntered
 * @property Carbon $timeEnd
 * @property Carbon $timeStart
 * @property CompanyReference $company
 * @property Guid $mobileGuid
 * @property InvoiceReference $invoice
 * @property MemberReference $member
 * @property Metadata $_info
 * @property TimeSheetReference $timeSheet
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $customFields
 * @property boolean $addToDetailDescriptionFlag
 * @property boolean $addToInternalAnalysisFlag
 * @property boolean $addToResolutionFlag
 * @property boolean $emailCcFlag
 * @property boolean $emailContactFlag
 * @property boolean $emailResourceFlag
 * @property float $actualHours
 * @property float $hourlyRate
 * @property float $hoursBilled
 * @property float $hoursDeduct
 * @property integer $businessUnitId
 * @property integer $chargeToId
 * @property integer $id
 * @property integer $locationId
 * @property string $billableOption
 * @property string $chargeToType
 * @property string $emailCc
 * @property string $enteredBy
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class TimeEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'actualHours' => 'float',
        'addToDetailDescriptionFlag' => 'boolean',
        'addToInternalAnalysisFlag' => 'boolean',
        'addToResolutionFlag' => 'boolean',
        'agreement' => AgreementReference::class,
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'company' => CompanyReference::class,
        'customFields' => 'array',
        'dateEntered' => Carbon::class,
        'emailCc' => 'string',
        'emailCcFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'enteredBy' => 'string',
        'hourlyRate' => 'float',
        'hoursBilled' => 'float',
        'hoursDeduct' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoice' => InvoiceReference::class,
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'status' => 'string',
        'timeEnd' => Carbon::class,
        'timeSheet' => TimeSheetReference::class,
        'timeStart' => Carbon::class,
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class
    ];
}
