<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusNotification Version v2018_6
 *
 * Model for RmaStatusNotification
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusReference $status
 * @property integer $id
 * @property integer $workflowStep
 * @property string $email
 */
class RmaStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'email' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusReference',
        'workflowStep' => 'integer',
    ];
}
