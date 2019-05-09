<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfiguration Version v2019_2
 * 
 * Model for LdapConfiguration
 *
 * @property integer $id
 * @property string $name
 * @property string $server
 * @property string $domain
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
