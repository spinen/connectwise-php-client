<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationNotification Version v2018_6
 *
 * Model for ManagedDevicesIntegrationNotification
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference $notifyWho
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'id' => 'integer',
        'logType' => 'string',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2018_6\Company\ManagedDevicesIntegrationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference',
    ];
}
