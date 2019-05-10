<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationNotification Version v2018_6
 *
 * Model for ManagedDevicesIntegrationNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Company\MemberReference $member
 * @property string $logType
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ManagedDevicesIntegrationNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2018_6\Company\ManagedDevicesIntegrationReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Company\NotificationRecipientReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Company\MemberReference',
        'logType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
