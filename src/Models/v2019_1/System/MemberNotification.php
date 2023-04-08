<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotification Version v2019_1
 *
 * Model for MemberNotification
 *
 * @property DocumentReference $attachment
 * @property Metadata $_info
 * @property bool $readFlag
 * @property int $id
 * @property int $recordId
 * @property string $message
 * @property string $notificationTrigger
 * @property string $recordType
 */
class MemberNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'attachment' => DocumentReference::class,
        'id' => 'integer',
        'message' => 'string',
        'notificationTrigger' => 'string',
        'readFlag' => 'boolean',
        'recordId' => 'integer',
        'recordType' => 'string',
    ];
}
