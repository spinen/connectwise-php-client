<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusNotification Version v2018_4
 *
 * Model for RmaStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\RmaStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class RmaStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\RmaStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
