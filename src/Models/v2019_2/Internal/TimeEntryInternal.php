<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntryInternal Version v2019_2
 *
 * Model for TimeEntryInternal
 *
 * @property Carbon\Carbon $timeEnd
 * @property Carbon\Carbon $timeStart
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\TimeSheetReference $timeSheet
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\WorkTypeReference $workType
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
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
        'actualHours' => 'float',
        'addToDetailDescriptionFlag' => 'boolean',
        'addToInternalAnalysisFlag' => 'boolean',
        'addToResolutionFlag' => 'boolean',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Internal\AgreementReference',
        'billableOption' => 'string',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ChargeToReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Internal\CompanyReference',
        'customFields' => 'array',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'emailCc' => 'string',
        'emailCcFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'hourlyRate' => 'float',
        'hoursBilled' => 'float',
        'hoursDeduct' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_2\Internal\InvoiceReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Guid',
        'notes' => 'string',
        'status' => 'string',
        'timeEnd' => 'Carbon\Carbon',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2019_2\Internal\TimeSheetReference',
        'timeStart' => 'Carbon\Carbon',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Internal\WorkTypeReference',
    ];
}
