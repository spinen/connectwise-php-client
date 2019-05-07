<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuthAnvil
 *
 * @property integer $id
 * @property string $serverLocationUrl
 * @property integer $siteId
 */
class AuthAnvil extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serverLocationUrl' => 'string',
        'siteId' => 'integer',
    ];
}
