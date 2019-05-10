<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTriggerOption Version v2018_4
 *
 * Model for WorkflowTriggerOption
 *
 * @property string $value
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference $customField
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class WorkflowTriggerOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'value' => 'string',
        'name' => 'string',
        'customField' => 'Spinen\ConnectWise\Models\v2018_4\System\UserDefinedFieldReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
