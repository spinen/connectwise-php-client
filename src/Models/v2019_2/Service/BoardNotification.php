<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardNotification Version v2019_2
 *
 * Model for BoardNotification
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Service\NotificationRecipientReference $notifyWho
 * @property integer $id
 * @property string $email
 */
class BoardNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'email' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_2\Service\NotificationRecipientReference',
    ];
}
