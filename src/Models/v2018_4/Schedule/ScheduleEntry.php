<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntry
 *
 * @property integer $id
 * @property integer $objectId
 * @property string $name
 * @property carbon $dateStart
 * @property carbon $dateEnd
 * @property boolean $doneFlag
 * @property boolean $acknowledgedFlag
 * @property boolean $ownerFlag
 * @property boolean $meetingFlag
 * @property boolean $allowScheduleConflictsFlag
 * @property boolean $addMemberToProjectFlag
 * @property integer $projectRoleId
 * @property carbon $closeDate
 * @property double $hours
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
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'doneFlag' => 'boolean',
        'acknowledgedFlag' => 'boolean',
        'ownerFlag' => 'boolean',
        'meetingFlag' => 'boolean',
        'allowScheduleConflictsFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'closeDate' => 'carbon',
        'hours' => 'double',
    ];
}
