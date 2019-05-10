<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry Version v2018_6
 *
 * Model for ScheduleEntry
 *
 * @property Carbon\Carbon $closeDate
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleSpanReference $span
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\ServiceLocationReference $where
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
        'acknowledgedFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'allowScheduleConflictsFlag' => 'boolean',
        'closeDate' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'doneFlag' => 'boolean',
        'hours' => 'float',
        'id' => 'integer',
        'meetingFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Guid',
        'name' => 'string',
        'objectId' => 'integer',
        'ownerFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'reminder' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\ReminderReference',
        'span' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleSpanReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleStatusReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\ScheduleTypeReference',
        'where' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\ServiceLocationReference',
    ];
}
