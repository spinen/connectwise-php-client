<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryInternal Version v2018_6
 * 
 * Model for TimeEntryInternal
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\AgreementReference $agreement
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
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\Guid $mobileGuid
 * @property number $hourlyRate
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\TimeSheetReference $timeSheet
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2018_6\Internal\Metadata $_info
 * @property array $customFields
 */
class TimeEntryInternal extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Internal\CompanyReference',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2018_6\Internal\ChargeToReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Internal\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Internal\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Internal\SystemDepartmentReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Internal\WorkTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Internal\WorkRoleReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Internal\AgreementReference',
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
        'invoice' => 'Spinen\ConnectWise\Models\v2018_6\Internal\InvoiceReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Internal\Guid',
        'hourlyRate' => 'number',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2018_6\Internal\TimeSheetReference',
        'status' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Internal\Metadata',
        'customFields' => 'array',
    ];
}