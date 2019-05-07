<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementNetworksSecurity
 *
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $site
 */
class ManagementNetworksSecurity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'username' => 'string',
        'password' => 'string',
        'site' => 'string',
    ];
}
