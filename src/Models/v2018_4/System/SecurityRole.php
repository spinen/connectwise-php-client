<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRole Version v2018_4
 *
 * Model for SecurityRole
 *
 * @property Metadata $_info
 * @property bool $adminFlag
 * @property bool $inactiveFlag
 * @property int $id
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
