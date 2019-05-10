<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CloudBusMessage Version v2018_6
 *
 * Model for CloudBusMessage
 *
 * @property integer $id
 * @property integer $timestamp
 * @property string $messageGuid
 * @property string $messageType
 * @property string $payload
 * @property string $source
 * @property string $version
 */
class CloudBusMessage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'messageGuid' => 'string',
        'messageType' => 'string',
        'payload' => 'string',
        'source' => 'string',
        'timestamp' => 'integer',
        'version' => 'string'
    ];
}
