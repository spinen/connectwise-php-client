<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger Version v2018_6
 * 
 * Model for WorkflowTrigger
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $hasOptionsFlag
 * @property boolean $hasOperatorFlag
 * @property Spinen\ConnectWise\Models\v2018_6\System\UserDefinedFieldReference $customField
 * @property string $expectedType
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
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
        'customField' => 'Spinen\ConnectWise\Models\v2018_6\System\UserDefinedFieldReference',
        'expectedType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
