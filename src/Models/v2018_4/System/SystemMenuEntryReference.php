<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemMenuEntryReference Version v2018_4
 *
 * Model for SystemMenuEntryReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SystemMenuEntryReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
