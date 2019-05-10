<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoAssignResource Version v2018_4
 *
 * Model for BoardAutoAssignResource
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\NotificationRecipientReference $notifyWho
 * @property integer $id
 */
class BoardAutoAssignResource extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Service\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_4\Service\NotificationRecipientReference',
    ];
}
