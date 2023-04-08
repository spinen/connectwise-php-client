<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfigurationReference Version v2019_1
 *
 * Model for LdapConfigurationReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 * @property string $server
 */
class LdapConfigurationReference extends Model
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
        'server' => 'string',
    ];
}
