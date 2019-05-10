<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagementNetworkSecurity Version v2019_3
 *
 * Model for ManagementNetworkSecurity
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'site' => 'string',
        'username' => 'string',
    ];
}
