<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry Version v2018_4
 * 
 * Model for ScheduleEntry
 *
 * @property integer $id
 * @property integer $objectId
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ServiceLocationReference $where
 * @property string $dateStart
 * @property string $dateEnd
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleSpanReference $span
 * @property boolean $doneFlag
 * @property boolean $acknowledgedFlag
 * @property boolean $ownerFlag
 * @property boolean $meetingFlag
 * @property boolean $allowScheduleConflictsFlag
 * @property boolean $addMemberToProjectFlag
 * @property integer $projectRoleId
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\Guid $mobileGuid
 * @property string $closeDate
 * @property number $hours
 * @property Spinen\ConnectWise\Models\v2018_4\Schedule\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\MemberReference',
        'where' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ServiceLocationReference',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'reminder' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ReminderReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleStatusReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleTypeReference',
        'span' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\ScheduleSpanReference',
        'doneFlag' => 'boolean',
        'acknowledgedFlag' => 'boolean',
        'ownerFlag' => 'boolean',
        'meetingFlag' => 'boolean',
        'allowScheduleConflictsFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\Guid',
        'closeDate' => 'string',
        'hours' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Schedule\Metadata',
    ];
}
