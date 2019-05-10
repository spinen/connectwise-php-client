<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStopwatch Version v2018_6
 *
 * Model for ActivityStopwatch
 *
 * @property AgreementReference $agreement
 * @property Carbon $dateEntered
 * @property Carbon $endTime
 * @property Carbon $startTime
 * @property Guid $activityMobileGuid
 * @property Guid $mobileGuid
 * @property MemberReference $member
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
 * @property integer $activityId
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property integer $totalPauseTime
 * @property string $billableOption
 * @property string $internalNotes
 * @property string $notes
 * @property string $status
 */
class ActivityStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'activityId' => 'integer',
        'activityMobileGuid' => Guid::class,
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
        'startTime' => Carbon::class,
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class
    ];
}
