<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationLogin Version v2019_2
 *
 * Model for ManagedDevicesIntegrationLogin
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property integer $id
 * @property string $password
 * @property string $username
 */
class ManagedDevicesIntegrationLogin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2019_2\Company\ManagedDevicesIntegrationReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'password' => 'string',
        'username' => 'string',
    ];
}
