<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuthAnvil Version v2018_4
 *
 * Model for AuthAnvil
 *
 * @property integer $id
 * @property string $serverLocationUrl
 * @property integer $siteId
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
