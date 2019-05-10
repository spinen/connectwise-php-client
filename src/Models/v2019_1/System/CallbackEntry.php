<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CallbackEntry Version v2019_1
 *
 * Model for CallbackEntry
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $memberId
 * @property integer $objectId
 * @property string $description
 * @property string $level
 * @property string $type
 * @property string $url
 */
class CallbackEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'level' => 'string',
        'memberId' => 'integer',
        'objectId' => 'integer',
        'type' => 'string',
        'url' => 'string',
    ];
}
