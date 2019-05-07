<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTableType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class WorkflowTableType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
