<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

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
