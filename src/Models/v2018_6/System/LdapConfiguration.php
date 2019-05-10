<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfiguration Version v2018_6
 *
 * Model for LdapConfiguration
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'domain' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'server' => 'string',
    ];
}
