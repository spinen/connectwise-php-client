<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusNotification Version v2019_4
 *
 * Model for RmaStatusNotification
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property RmaStatusReference $status
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
        '_info' => Metadata::class,
        'email' => 'string',
        'id' => 'integer',
        'member' => MemberReference::class,
        'notifyWho' => NotificationRecipientReference::class,
        'status' => RmaStatusReference::class,
        'workflowStep' => 'integer'
    ];
}
