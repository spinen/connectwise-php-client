<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTriggerOption
 *
 * @property string $value
 * @property string $name
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
    ];
}
