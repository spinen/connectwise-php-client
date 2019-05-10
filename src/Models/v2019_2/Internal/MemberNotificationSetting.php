<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotificationSetting Version v2019_2
 *
 * Model for MemberNotificationSetting
 *
 * @property integer $id
 * @property string $notificationType
 * @property string $notificationTrigger
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 */
class MemberNotificationSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notificationType' => 'string',
        'notificationTrigger' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}
