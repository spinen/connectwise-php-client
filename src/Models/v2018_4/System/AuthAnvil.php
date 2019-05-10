<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuthAnvil Version v2018_4
 *
 * Model for AuthAnvil
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'serverLocationUrl' => 'string',
        'siteId' => 'integer',
    ];
}
