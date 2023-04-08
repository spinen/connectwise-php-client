<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTriggerOption Version v2018_6
 *
 * Model for WorkflowTriggerOption
 *
 * @property Metadata $_info
 * @property UserDefinedFieldReference $customField
 * @property string $name
 * @property string $value
 */
class WorkflowTriggerOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'customField' => UserDefinedFieldReference::class,
        'name' => 'string',
        'value' => 'string',
    ];
}
