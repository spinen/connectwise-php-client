<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoAssignResource Version v2019_3
 *
 * Model for BoardAutoAssignResource
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Service\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class BoardAutoAssignResource extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_3\Service\NotificationRecipientReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
