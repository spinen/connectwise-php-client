<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowNotifyType Version v2019_1
 *
 * Model for WorkflowNotifyType
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $isSetupFlag
 * @property boolean $externalFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
