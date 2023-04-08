<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TeamRoleReference Version v2018_5
 *
 * Model for TeamRoleReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class TeamRoleReference extends Model
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
