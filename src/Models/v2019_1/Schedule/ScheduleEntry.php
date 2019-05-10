<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry Version v2019_1
 * 
 * Model for ScheduleEntry
 *
 * @property integer $id
 * @property integer $objectId
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ServiceLocationReference $where
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleSpanReference $span
 * @property boolean $doneFlag
 * @property boolean $acknowledgedFlag
 * @property boolean $ownerFlag
 * @property boolean $meetingFlag
 * @property boolean $allowScheduleConflictsFlag
 * @property boolean $addMemberToProjectFlag
 * @property integer $projectRoleId
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\Guid $mobileGuid
 * @property Carbon\Carbon $closeDate
 * @property float $hours
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata $_info
 */
class ScheduleEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'objectId' => 'integer',
        'name' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\MemberReference',
        'where' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ServiceLocationReference',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'reminder' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ReminderReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleStatusReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleTypeReference',
        'span' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleSpanReference',
        'doneFlag' => 'boolean',
        'acknowledgedFlag' => 'boolean',
        'ownerFlag' => 'boolean',
        'meetingFlag' => 'boolean',
        'allowScheduleConflictsFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\Guid',
        'closeDate' => 'Carbon\Carbon',
        'hours' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata',
    ];
}
