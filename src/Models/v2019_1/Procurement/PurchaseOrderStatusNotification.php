<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusNotification Version v2019_1
 *
 * Model for PurchaseOrderStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
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
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
