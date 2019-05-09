<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationLogin Version v2019_2
 * 
 * Model for ManagedDevicesIntegrationLogin
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property string $username
 * @property string $password
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 */
class ManagedDevicesIntegrationLogin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2019_2\Company\ManagedDevicesIntegrationReference',
        'username' => 'string',
        'password' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
