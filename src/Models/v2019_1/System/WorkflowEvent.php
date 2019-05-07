<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowEvent
 *
 * @property integer $id
 * @property string $name
 * @property string $eventCondition
 * @property string $frequencyUnit
 * @property integer $frequencyOfExecution
 * @property integer $maxNumberOfExecution
 * @property string $executionTime
 */
class WorkflowEvent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'eventCondition' => 'string',
        'frequencyUnit' => 'string',
        'frequencyOfExecution' => 'integer',
        'maxNumberOfExecution' => 'integer',
        'executionTime' => 'string',
    ];
}
