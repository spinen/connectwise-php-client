<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowEvent Version v2018_5
 * 
 * Model for WorkflowEvent
 *
 * @property integer $id
 * @property string $name
 * @property string $eventCondition
 * @property string $frequencyUnit
 * @property integer $frequencyOfExecution
 * @property integer $maxNumberOfExecution
 * @property string $executionTime
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
