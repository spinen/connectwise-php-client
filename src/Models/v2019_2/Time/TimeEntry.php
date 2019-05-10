<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeEntry Version v2019_2
 *
 * Model for TimeEntry
 *
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $timeEnd
 * @property Carbon\Carbon $timeStart
 * @property Spinen\ConnectWise\Models\v2019_2\Time\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_2\Time\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_2\Time\InvoiceReference $invoice
 * @property Spinen\ConnectWise\Models\v2019_2\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Time\TimeSheetReference $timeSheet
 * @property Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Time\WorkTypeReference $workType
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
        'actualHours' => 'float',
        'addToDetailDescriptionFlag' => 'boolean',
        'addToInternalAnalysisFlag' => 'boolean',
        'addToResolutionFlag' => 'boolean',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Time\CompanyReference',
        'customFields' => 'array',
        'dateEntered' => 'Carbon\Carbon',
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
        'invoice' => 'Spinen\ConnectWise\Models\v2019_2\Time\InvoiceReference',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_2\Time\Guid',
        'notes' => 'string',
        'status' => 'string',
        'timeEnd' => 'Carbon\Carbon',
        'timeSheet' => 'Spinen\ConnectWise\Models\v2019_2\Time\TimeSheetReference',
        'timeStart' => 'Carbon\Carbon',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Time\WorkTypeReference',
    ];
}
