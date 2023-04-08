<?php

namespace Spinen\ConnectWise\Models\v2019_4\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch Version v2019_4
 *
 * Model for ScheduleStopwatch
 *
 * @property AgreementReference $agreement
 * @property Carbon $dateEntered
 * @property Carbon $endTime
 * @property Carbon $startTime
 * @property Guid $mobileGuid
 * @property Guid $scheduleMobileGuid
 * @property MemberReference $member
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
 * @property int $scheduleId
 * @property int $totalPauseTime
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
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => Carbon::class,
        'endTime' => Carbon::class,
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'scheduleId' => 'integer',
        'scheduleMobileGuid' => Guid::class,
        'startTime' => Carbon::class,
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
