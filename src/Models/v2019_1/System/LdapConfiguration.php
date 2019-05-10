<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfiguration Version v2019_1
 *
 * Model for LdapConfiguration
 *
 * @property Metadata $_info
 * @property integer $id
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
        'server' => 'string'
    ];
}
