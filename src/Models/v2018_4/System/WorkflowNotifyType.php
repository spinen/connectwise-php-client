<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowNotifyType Version v2018_4
 *
 * Model for WorkflowNotifyType
 *
 * @property Metadata $_info
 * @property boolean $externalFlag
 * @property boolean $isSetupFlag
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class WorkflowNotifyType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'isSetupFlag' => 'boolean',
        'name' => 'string'
    ];
}
