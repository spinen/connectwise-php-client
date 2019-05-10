<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotification Version v2019_2
 *
 * Model for MemberNotification
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\DocumentReference $attachment
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property boolean $readFlag
 * @property integer $id
 * @property integer $recordId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'attachment' => 'Spinen\ConnectWise\Models\v2019_2\System\DocumentReference',
        'id' => 'integer',
        'message' => 'string',
        'notificationTrigger' => 'string',
        'readFlag' => 'boolean',
        'recordId' => 'integer',
        'recordType' => 'string',
    ];
}
