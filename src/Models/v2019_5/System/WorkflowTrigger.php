<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTrigger Version v2019_5
 *
 * Model for WorkflowTrigger
 *
 * @property Metadata $_info
 * @property UserDefinedFieldReference $customField
 * @property bool $hasOperatorFlag
 * @property bool $hasOptionsFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'customField' => UserDefinedFieldReference::class,
        'description' => 'string',
        'expectedType' => 'string',
        'hasOperatorFlag' => 'boolean',
        'hasOptionsFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
