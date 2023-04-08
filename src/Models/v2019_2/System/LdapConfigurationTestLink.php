<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LdapConfigurationTestLink Version v2019_2
 *
 * Model for LdapConfigurationTestLink
 *
 * @property string $Server
 */
class LdapConfigurationTestLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Server' => 'string',
    ];
}
