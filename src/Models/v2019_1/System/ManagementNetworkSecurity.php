<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementNetworkSecurity Version v2019_1
 *
 * Model for ManagementNetworkSecurity
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property string $site
 * @property string $username
 */
class ManagementNetworkSecurity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'site' => 'string',
        'username' => 'string',
    ];
}
