<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Imap
 *
 * @property integer $id
 * @property string $name
 * @property string $imapName
 * @property string $processedName
 * @property string $server
 * @property string $userName
 * @property string $password
 * @property integer $port
 * @property boolean $sslFlag
 */
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
