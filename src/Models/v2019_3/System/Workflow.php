<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Workflow Version v2019_3
 *
 * Model for Workflow
 *
 * @property BoardReference $board
 * @property Carbon $batchLastRan
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property WorkflowTableTypeReference $tableType
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
        '_info' => Metadata::class,
        'activateFlag' => 'boolean',
        'batchFrequencyUnit' => 'string',
        'batchInterval' => 'integer',
        'batchLastRan' => Carbon::class,
        'batchSchedule' => 'string',
        'board' => BoardReference::class,
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'tableType' => WorkflowTableTypeReference::class
    ];
}
