<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfigurationReference Version v2019_2
 * 
 * Model for LdapConfigurationReference
 *
 * @property integer $id
 * @property string $name
 * @property string $server
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 */
class LdapConfigurationReference extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}