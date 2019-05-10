<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusNotification Version v2018_4
 *
 * Model for PurchaseOrderStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\PurchaseOrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class PurchaseOrderStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\PurchaseOrderStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
