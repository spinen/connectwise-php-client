<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger Version v2018_4
 *
 * Model for WorkflowTrigger
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference $customField
 * @property boolean $hasOperatorFlag
 * @property boolean $hasOptionsFlag
 * @property integer $id
 * @property string $description
 * @property string $expectedType
 * @property string $name
 */
class WorkflowTrigger extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'customField' => 'Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference',
        'description' => 'string',
        'expectedType' => 'string',
        'hasOperatorFlag' => 'boolean',
        'hasOptionsFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
