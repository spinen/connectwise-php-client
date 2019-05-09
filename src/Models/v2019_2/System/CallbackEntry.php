<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CallbackEntry Version v2019_2
 * 
 * Model for CallbackEntry
 *
 * @property integer $id
 * @property string $description
 * @property string $url
 * @property integer $objectId
 * @property string $type
 * @property string $level
 * @property integer $memberId
 * @property boolean $inactiveFlag
 * @property boolean $isSoapCallbackFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class CallbackEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'url' => 'string',
        'objectId' => 'integer',
        'type' => 'string',
        'level' => 'string',
        'memberId' => 'integer',
        'inactiveFlag' => 'boolean',
        'isSoapCallbackFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
