<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotification Version v2019_1
 *
 * Model for MemberNotification
 *
 * @property integer $id
 * @property string $message
 * @property Spinen\ConnectWise\Models\v2019_1\System\DocumentReference $attachment
 * @property string $notificationTrigger
 * @property integer $recordId
 * @property string $recordType
 * @property boolean $readFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'attachment' => 'Spinen\ConnectWise\Models\v2019_1\System\DocumentReference',
        'notificationTrigger' => 'string',
        'recordId' => 'integer',
        'recordType' => 'string',
        'readFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
