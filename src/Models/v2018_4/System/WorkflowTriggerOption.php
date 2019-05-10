<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTriggerOption Version v2018_4
 *
 * Model for WorkflowTriggerOption
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference $customField
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'customField' => 'Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference',
        'name' => 'string',
        'value' => 'string',
    ];
}
