<?php

namespace Spinen\ConnectWise\Models\Schedule;

use Spinen\ConnectWise\Support\Model;

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
        'allowScheduleConflictsFlag' => 'boolean',
        'addMemberToProjectFlag' => 'boolean',
        'projectRoleId' => 'integer',
        'closeDate' => 'carbon',
        'hours' => 'double',
    ];
}
