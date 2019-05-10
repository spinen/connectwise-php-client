<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch Version v2019_1
 *
 * Model for ScheduleStopwatch
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Time\AgreementReference $agreement
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2019_1\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Guid $mobileGuid
 * @property string $notes
 * @property integer $scheduleId
 * @property Spinen\ConnectWise\Models\v2019_1\Time\Guid $scheduleMobileGuid
 * @property Carbon\Carbon $startTime
 * @property string $status
 * @property integer $totalPauseTime
 * @property Spinen\ConnectWise\Models\v2019_1\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Time\WorkTypeReference $workType
 */
class ScheduleStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Time\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Time\Guid',
        'notes' => 'string',
        'scheduleId' => 'integer',
        'scheduleMobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Time\Guid',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Time\WorkTypeReference',
    ];
}
