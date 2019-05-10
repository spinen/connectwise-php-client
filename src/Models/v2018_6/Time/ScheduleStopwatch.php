<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch Version v2018_6
 *
 * Model for ScheduleStopwatch
 *
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property Carbon\Carbon $startTime
 * @property Spinen\ConnectWise\Models\v2018_6\Time\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Guid $scheduleMobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Time\WorkTypeReference $workType
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $scheduleId
 * @property integer $totalPauseTime
 * @property string $billableOption
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class ScheduleStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Time\Guid',
        'notes' => 'string',
        'scheduleId' => 'integer',
        'scheduleMobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Time\Guid',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Time\WorkTypeReference',
    ];
}
