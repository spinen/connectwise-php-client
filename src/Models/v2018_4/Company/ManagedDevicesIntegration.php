<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegration Version v2018_4
 *
 * Model for ManagedDevicesIntegration
 *
 * @property integer $id
 * @property string $name
 * @property string $solution
 * @property string $portalUrl
 * @property string $loginBy
 * @property string $globalLoginUsername
 * @property string $globalLoginPassword
 * @property string $defaultBillingLevel
 * @property string $managementItSetupType
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2018_4\Company\IntegratorLoginReference $integratorLogin
 * @property boolean $matchOnSerialNumberFlag
 * @property boolean $disableNewCrossReferencesFlag
 * @property boolean $configBillCustomerFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
class ManagedDevicesIntegration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'solution' => 'string',
        'portalUrl' => 'string',
        'loginBy' => 'string',
        'globalLoginUsername' => 'string',
        'globalLoginPassword' => 'string',
        'defaultBillingLevel' => 'string',
        'managementItSetupType' => 'string',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2018_4\Company\SystemDepartmentReference',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2018_4\Company\IntegratorLoginReference',
        'matchOnSerialNumberFlag' => 'boolean',
        'disableNewCrossReferencesFlag' => 'boolean',
        'configBillCustomerFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
