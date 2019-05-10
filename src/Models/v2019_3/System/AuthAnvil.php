<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuthAnvil Version v2019_3
 *
 * Model for AuthAnvil
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property integer $id
 * @property integer $siteId
 * @property string $serverLocationUrl
 */
class AuthAnvil extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'id' => 'integer',
        'serverLocationUrl' => 'string',
        'siteId' => 'integer',
    ];
}
