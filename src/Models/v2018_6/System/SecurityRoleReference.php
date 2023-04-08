<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SecurityRoleReference Version v2018_6
 *
 * Model for SecurityRoleReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class SecurityRoleReference extends Model
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
