<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotification
 *
 * @property integer $id
 * @property string $message
 * @property string $notificationTrigger
 * @property integer $recordId
 * @property string $recordType
 * @property boolean $readFlag
 */
class MemberNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'notificationTrigger' => 'string',
        'recordId' => 'integer',
        'recordType' => 'string',
        'readFlag' => 'boolean',
    ];
}
