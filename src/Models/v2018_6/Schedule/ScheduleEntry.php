<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry Version v2018_6
 *
 * Model for ScheduleEntry
 *
 * @property Carbon $closeDate
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property Guid $mobileGuid
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ReminderReference $reminder
 * @property ScheduleSpanReference $span
 * @property ScheduleStatusReference $status
 * @property ScheduleTypeReference $type
 * @property ServiceLocationReference $where
 * @property boolean $acknowledgedFlag
 * @property boolean $addMemberToProjectFlag
 * @property boolean $allowScheduleConflictsFlag
 * @property boolean $doneFlag
 * @property boolean $meetingFlag
 * @property boolean $ownerFlag
 * @property float $hours
 * @property integer $id
 * @property integer $objectId
 * @property integer $projectRoleId
 * @property string $name
 */
class ScheduleEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'acknowledgedFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'allowScheduleConflictsFlag' => 'boolean',
        'closeDate' => Carbon::class,
        'dateEnd' => Carbon::class,
        'dateStart' => Carbon::class,
        'doneFlag' => 'boolean',
        'hours' => 'float',
        'id' => 'integer',
        'meetingFlag' => 'boolean',
        'member' => MemberReference::class,
        'mobileGuid' => Guid::class,
        'name' => 'string',
        'objectId' => 'integer',
        'ownerFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'reminder' => ReminderReference::class,
        'span' => ScheduleSpanReference::class,
        'status' => ScheduleStatusReference::class,
        'type' => ScheduleTypeReference::class,
        'where' => ServiceLocationReference::class
    ];
}
