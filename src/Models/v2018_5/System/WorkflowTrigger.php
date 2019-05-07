<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $hasOptionsFlag
 * @property boolean $hasOperatorFlag
 * @property string $expectedType
 */
class WorkflowTrigger extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'hasOptionsFlag' => 'boolean',
        'hasOperatorFlag' => 'boolean',
        'expectedType' => 'string',
    ];
}
