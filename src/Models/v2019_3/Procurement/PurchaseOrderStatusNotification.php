<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusNotification Version v2019_3
 *
 * Model for PurchaseOrderStatusNotification
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\PurchaseOrderStatusReference $status
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'email' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\PurchaseOrderStatusReference',
        'workflowStep' => 'integer',
    ];
}
