<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTriggerOption Version v2019_1
 *
 * Model for WorkflowTriggerOption
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\UserDefinedFieldReference $customField
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'customField' => 'Spinen\ConnectWise\Models\v2019_1\System\UserDefinedFieldReference',
        'name' => 'string',
        'value' => 'string',
    ];
}
