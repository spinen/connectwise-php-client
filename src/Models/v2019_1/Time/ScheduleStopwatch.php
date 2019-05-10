<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch Version v2019_1
 *
 * Model for ScheduleStopwatch
 *
 * @property AgreementReference $agreement
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property Carbon\Carbon $startTime
 * @property Guid $mobileGuid
 * @property Guid $scheduleMobileGuid
 * @property MemberReference $member
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
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
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => Carbon\Carbon::class,
        'endTime' => Carbon\Carbon::class,
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'notes' => 'string',
        'scheduleId' => 'integer',
        'scheduleMobileGuid' => Guid::class,
        'startTime' => Carbon\Carbon::class,
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
