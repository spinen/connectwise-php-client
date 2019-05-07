<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegration
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
 * @property boolean $matchOnSerialNumberFlag
 * @property boolean $disableNewCrossReferencesFlag
 * @property boolean $configBillCustomerFlag
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
        'matchOnSerialNumberFlag' => 'boolean',
        'disableNewCrossReferencesFlag' => 'boolean',
        'configBillCustomerFlag' => 'boolean',
    ];
}
