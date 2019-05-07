<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfiguration
 *
 * @property integer $id
 * @property string $name
 * @property string $server
 * @property string $domain
 */
class LdapConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'server' => 'string',
        'domain' => 'string',
    ];
}
