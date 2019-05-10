<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfigurationReference Version v2018_4
 *
 * Model for LdapConfigurationReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'server' => 'string',
    ];
}
