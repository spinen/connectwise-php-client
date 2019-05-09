<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Token Version v2018_6
 * 
 * Model for Token
 *
 * @property string $publicKey
 * @property string $privateKey
 * @property string $expiration
 */
class Token extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'publicKey' => 'string',
        'privateKey' => 'string',
        'expiration' => 'string',
    ];
}
