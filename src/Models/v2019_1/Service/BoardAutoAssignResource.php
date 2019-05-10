<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoAssignResource Version v2019_1
 *
 * Model for BoardAutoAssignResource
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Service\NotificationRecipientReference $notifyWho
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Service\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_1\Service\NotificationRecipientReference',
    ];
}
