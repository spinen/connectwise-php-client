<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusNotification Version v2018_5
 *
 * Model for PurchaseOrderStatusNotification
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property PurchaseOrderStatusReference $status
 * @property integer $id
 * @property integer $workflowStep
 * @property string $email
 */
class PurchaseOrderStatusNotification extends Model
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
        'status' => PurchaseOrderStatusReference::class,
        'workflowStep' => 'integer'
    ];
}
