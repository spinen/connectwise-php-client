<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfiguration Version v2018_4
 *
 * Model for LdapConfiguration
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $domain
 * @property string $name
 * @property string $server
 */
class LdapConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'domain' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'server' => 'string',
    ];
}
