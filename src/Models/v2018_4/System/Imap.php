<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Imap Version v2018_4
 *
 * Model for Imap
 *
 * @property EmailConnectorReference $emailConnector
 * @property Metadata $_info
 * @property boolean $sslFlag
 * @property integer $id
 * @property integer $port
 * @property string $imapName
 * @property string $name
 * @property string $password
 * @property string $processedName
 * @property string $server
 * @property string $userName
 */
class Imap extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'emailConnector' => EmailConnectorReference::class,
        'id' => 'integer',
        'imapName' => 'string',
        'name' => 'string',
        'password' => 'string',
        'port' => 'integer',
        'processedName' => 'string',
        'server' => 'string',
        'sslFlag' => 'boolean',
        'userName' => 'string',
    ];
}
