<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotificationSetting
 *
 * @property integer $id
 * @property string $notificationType
 * @property string $notificationTrigger
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
    ];
}
