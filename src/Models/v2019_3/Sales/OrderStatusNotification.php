<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusNotification Version v2019_3
 *
 * Model for OrderStatusNotification
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\OrderStatusReference $status
 * @property integer $id
 * @property integer $workflowStep
 * @property string $email
 */
class OrderStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'email' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_3\Sales\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Sales\OrderStatusReference',
        'workflowStep' => 'integer',
    ];
}
