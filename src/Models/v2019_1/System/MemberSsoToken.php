<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberSsoToken Version v2019_1
 * 
 * Model for MemberSsoToken
 *
 * @property string $token
 */
class MemberSsoToken extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'token' => 'string',
    ];
}
