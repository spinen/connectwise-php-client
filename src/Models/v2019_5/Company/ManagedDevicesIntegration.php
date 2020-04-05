<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegration Version v2019_5
 *
 * Model for ManagedDevicesIntegration
 *
 * @property IntegratorLoginReference $integratorLogin
 * @property Metadata $_info
 * @property SystemDepartmentReference $defaultDepartment
 * @property SystemLocationReference $defaultLocation
 * @property boolean $configBillCustomerFlag
 * @property boolean $disableNewCrossReferencesFlag
 * @property boolean $matchOnSerialNumberFlag
 * @property integer $id
 * @property string $defaultBillingLevel
 * @property string $globalLoginPassword
 * @property string $globalLoginUsername
 * @property string $loginBy
 * @property string $managementItSetupType
 * @property string $name
 * @property string $portalUrl
 * @property string $solution
 */
class ManagedDevicesIntegration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'configBillCustomerFlag' => 'boolean',
        'defaultBillingLevel' => 'string',
        'defaultDepartment' => SystemDepartmentReference::class,
        'defaultLocation' => SystemLocationReference::class,
        'disableNewCrossReferencesFlag' => 'boolean',
        'globalLoginPassword' => 'string',
        'globalLoginUsername' => 'string',
        'id' => 'integer',
        'integratorLogin' => IntegratorLoginReference::class,
        'loginBy' => 'string',
        'managementItSetupType' => 'string',
        'matchOnSerialNumberFlag' => 'boolean',
        'name' => 'string',
        'portalUrl' => 'string',
        'solution' => 'string'
    ];
}
