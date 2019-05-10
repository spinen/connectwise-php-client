<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationNotification Version v2019_2
 *
 * Model for ManagedDevicesIntegrationNotification
 *
 * @property ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property MemberReference $member
 * @property Metadata $_info
 * @property NotificationRecipientReference $notifyWho
 * @property integer $id
 * @property string $logType
 */
class ManagedDevicesIntegrationNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'logType' => 'string',
        'managedDevicesIntegration' => ManagedDevicesIntegrationReference::class,
        'member' => MemberReference::class,
        'notifyWho' => NotificationRecipientReference::class,
    ];
}
