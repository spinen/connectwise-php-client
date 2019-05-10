<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry Version v2019_3
 *
 * Model for ScheduleEntry
 *
 * @property Carbon\Carbon $acknowledgedDate
 * @property Carbon\Carbon $closeDate
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleSpanReference $span
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ServiceLocationReference $where
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'acknowledgedDate' => 'Carbon\Carbon',
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
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Guid',
        'name' => 'string',
        'objectId' => 'integer',
        'ownerFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'reminder' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ReminderReference',
        'span' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleSpanReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleStatusReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ScheduleTypeReference',
        'where' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ServiceLocationReference',
    ];
}
