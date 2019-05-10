<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CloudBusMessage Version v2019_2
 *
 * Model for CloudBusMessage
 *
 * @property integer $id
 * @property string $messageType
 * @property string $version
 * @property string $payload
 * @property string $source
 * @property integer $timestamp
 * @property string $messageGuid
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
        'messageType' => 'string',
        'version' => 'string',
        'payload' => 'string',
        'source' => 'string',
        'timestamp' => 'integer',
        'messageGuid' => 'string',
    ];
}
