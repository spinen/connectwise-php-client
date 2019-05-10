<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegration Version v2018_4
 *
 * Model for ManagedDevicesIntegration
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\IntegratorLoginReference $integratorLogin
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference $defaultLocation
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'configBillCustomerFlag' => 'boolean',
        'defaultBillingLevel' => 'string',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2018_4\Company\SystemDepartmentReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference',
        'disableNewCrossReferencesFlag' => 'boolean',
        'globalLoginPassword' => 'string',
        'globalLoginUsername' => 'string',
        'id' => 'integer',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2018_4\Company\IntegratorLoginReference',
        'loginBy' => 'string',
        'managementItSetupType' => 'string',
        'matchOnSerialNumberFlag' => 'boolean',
        'name' => 'string',
        'portalUrl' => 'string',
        'solution' => 'string',
    ];
}
