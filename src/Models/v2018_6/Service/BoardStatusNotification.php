<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatusNotification Version v2018_6
 * 
 * Model for BoardStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class BoardStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
