<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Imap extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'imapName' => 'string',
        'processedName' => 'string',
        'server' => 'string',
        'userName' => 'string',
        'password' => 'string',
        'port' => 'integer',
        'sslFlag' => 'boolean',
    ];
}
