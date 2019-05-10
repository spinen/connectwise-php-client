<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRole Version v2018_5
 *
 * Model for SecurityRole
 *
 * @property Metadata $_info
 * @property boolean $adminFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class SecurityRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'adminFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
    ];
}
