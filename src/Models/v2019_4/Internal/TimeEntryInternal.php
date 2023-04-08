<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryInternal Version v2019_4
 *
 * Model for TimeEntryInternal
 *
 * @property AgreementReference $agreement
 * @property Carbon $timeEnd
 * @property Carbon $timeStart
 * @property ChargeToReference $chargeTo
 * @property CompanyReference $company
 * @property Guid $mobileGuid
 * @property InvoiceReference $invoice
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property TimeSheetReference $timeSheet
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property array $customFields
 * @property bool $addToDetailDescriptionFlag
 * @property bool $addToInternalAnalysisFlag
 * @property bool $addToResolutionFlag
 * @property bool $emailCcFlag
 * @property bool $emailContactFlag
 * @property bool $emailResourceFlag
 * @property float $actualHours
 * @property float $hourlyRate
 * @property float $hoursBilled
 * @property float $hoursDeduct
 * @property int $id
 * @property string $billableOption
 * @property string $emailCc
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class TimeEntryInternal extends Model
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
        'chargeTo' => ChargeToReference::class,
        'company' => CompanyReference::class,
        'customFields' => 'array',
        'department' => SystemDepartmentReference::class,
        'emailCc' => 'string',
        'emailCcFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'hourlyRate' => 'float',
        'hoursBilled' => 'float',
        'hoursDeduct' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoice' => InvoiceReference::class,
        'location' => SystemLocationReference::class,
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'status' => 'string',
        'timeEnd' => Carbon::class,
        'timeSheet' => TimeSheetReference::class,
        'timeStart' => Carbon::class,
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
