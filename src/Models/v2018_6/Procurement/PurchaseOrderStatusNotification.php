<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusNotification Version v2018_6
 *
 * Model for PurchaseOrderStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\PurchaseOrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
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
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\PurchaseOrderStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
    ];
}
