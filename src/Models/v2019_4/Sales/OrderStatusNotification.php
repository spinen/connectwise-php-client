<?php

namespace Spinen\ConnectWise\Models\v2019_4\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusNotification Version v2019_4
 *
 * Model for OrderStatusNotification
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property OrderStatusReference $status
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
        '_info' => Metadata::class,
        'email' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'notifyWho' => NotificationRecipientReference::class,
        'status' => OrderStatusReference::class,
        'workflowStep' => 'integer'
    ];
}
