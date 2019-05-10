<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryInternal Version v2019_1
 *
 * Model for TimeEntryInternal
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference $agreement
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
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Guid $mobileGuid
 * @property float $hourlyRate
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\TimeSheetReference $timeSheet
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2019_1\Internal\Metadata $_info
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
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Internal\CompanyReference',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2019_1\Internal\ChargeToReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Internal\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Internal\SystemDepartmentReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WorkTypeReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Internal\WorkRoleReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Internal\AgreementReference',
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
        'invoice' => 'Spinen\ConnectWise\Models\v2019_1\Internal\InvoiceReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Guid',
        'hourlyRate' => 'float',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2019_1\Internal\TimeSheetReference',
        'status' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Internal\Metadata',
        'customFields' => 'array',
    ];
}
