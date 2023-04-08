<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Token Version v2019_2
 *
 * Model for Token
 *
 * @property string $expiration
 * @property string $privateKey
 * @property string $publicKey
 */
class Token extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'expiration' => 'string',
        'privateKey' => 'string',
        'publicKey' => 'string',
    ];
}
