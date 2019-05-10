<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CallbackEntry Version v2019_3
 *
 * Model for CallbackEntry
 *
 * @property Metadata $_info
 * @property boolean $inactiveFlag
 * @property boolean $isSoapCallbackFlag
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
        '_info' => Metadata::class,
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'isSoapCallbackFlag' => 'boolean',
        'level' => 'string',
        'memberId' => 'integer',
        'objectId' => 'integer',
        'type' => 'string',
        'url' => 'string'
    ];
}
