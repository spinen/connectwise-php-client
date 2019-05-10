<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger Version v2019_2
 *
 * Model for WorkflowTrigger
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\UserDefinedFieldReference $customField
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'customField' => 'Spinen\ConnectWise\Models\v2019_2\System\UserDefinedFieldReference',
        'description' => 'string',
        'expectedType' => 'string',
        'hasOperatorFlag' => 'boolean',
        'hasOptionsFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
