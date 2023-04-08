<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoAssignResource Version v2018_4
 *
 * Model for BoardAutoAssignResource
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property int $id
 */
class BoardAutoAssignResource extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'notifyWho' => NotificationRecipientReference::class,
    ];
}
