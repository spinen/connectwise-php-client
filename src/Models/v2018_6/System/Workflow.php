<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Workflow Version v2018_6
 *
 * Model for Workflow
 *
 * @property Carbon\Carbon $batchLastRan
 * @property Spinen\ConnectWise\Models\v2018_6\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\System\WorkflowTableTypeReference $tableType
 * @property boolean $activateFlag
 * @property integer $batchInterval
 * @property integer $id
 * @property string $batchFrequencyUnit
 * @property string $batchSchedule
 * @property string $name
 */
class Workflow extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'activateFlag' => 'boolean',
        'batchFrequencyUnit' => 'string',
        'batchInterval' => 'integer',
        'batchLastRan' => 'Carbon\Carbon',
        'batchSchedule' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2018_6\System\BoardReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'name' => 'string',
        'tableType' => 'Spinen\ConnectWise\Models\v2018_6\System\WorkflowTableTypeReference',
    ];
}
