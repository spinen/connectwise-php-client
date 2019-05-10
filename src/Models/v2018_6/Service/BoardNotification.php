<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardNotification Version v2018_6
 *
 * Model for BoardNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $member
 * @property string $email
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class BoardNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'email' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
