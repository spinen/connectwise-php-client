<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger Version v2019_2
 * 
 * Model for WorkflowTrigger
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $hasOptionsFlag
 * @property boolean $hasOperatorFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\UserDefinedFieldReference $customField
 * @property string $expectedType
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        'customField' => 'Spinen\ConnectWise\Models\v2019_2\System\UserDefinedFieldReference',
        'expectedType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
