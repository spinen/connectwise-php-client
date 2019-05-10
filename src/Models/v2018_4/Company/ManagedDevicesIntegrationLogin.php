<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationLogin Version v2018_4
 *
 * Model for ManagedDevicesIntegrationLogin
 *
 * @property ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property MemberReference $member
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'managedDevicesIntegration' => ManagedDevicesIntegrationReference::class,
        'member' => MemberReference::class,
        'password' => 'string',
        'username' => 'string'
    ];
}
