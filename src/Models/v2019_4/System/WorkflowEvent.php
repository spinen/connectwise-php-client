<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowEvent Version v2019_4
 *
 * Model for WorkflowEvent
 *
 * @property Metadata $_info
 * @property integer $frequencyOfExecution
 * @property integer $id
 * @property integer $maxNumberOfExecution
 * @property string $eventCondition
 * @property string $executionTime
 * @property string $frequencyUnit
 * @property string $name
 */
class WorkflowEvent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'eventCondition' => 'string',
        'executionTime' => 'string',
        'frequencyOfExecution' => 'integer',
        'frequencyUnit' => 'string',
        'id' => 'integer',
        'maxNumberOfExecution' => 'integer',
        'name' => 'string'
    ];
}