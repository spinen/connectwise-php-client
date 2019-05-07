<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowNotifyType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $isSetupFlag
 * @property boolean $externalFlag
 */
class WorkflowNotifyType extends Model
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
        'isSetupFlag' => 'boolean',
        'externalFlag' => 'boolean',
    ];
}
