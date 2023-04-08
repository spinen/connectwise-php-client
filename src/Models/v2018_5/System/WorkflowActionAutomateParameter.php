<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowActionAutomateParameter Version v2018_5
 *
 * Model for WorkflowActionAutomateParameter
 *
 * @property int $id
 * @property string $name
 * @property string $value
 */
class WorkflowActionAutomateParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'value' => 'string',
    ];
}
