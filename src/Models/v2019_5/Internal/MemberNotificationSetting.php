<?php

namespace Spinen\ConnectWise\Models\v2019_5\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberNotificationSetting Version v2019_5
 *
 * Model for MemberNotificationSetting
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'notificationTrigger' => 'string',
        'notificationType' => 'string'
    ];
}
