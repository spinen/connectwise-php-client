<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotificationSetting Version v2019_3
 *
 * Model for MemberNotificationSetting
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Internal\Metadata $_info
 * @property integer $id
 * @property string $notificationTrigger
 * @property string $notificationType
 */
class MemberNotificationSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Internal\Metadata',
        'id' => 'integer',
        'notificationTrigger' => 'string',
        'notificationType' => 'string',
    ];
}
