<?php

namespace Spinen\ConnectWise\Models\Company;

use Spinen\ConnectWise\Support\Model;

class PortalConfigurationInvoiceSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'displayInvPmtFlag' => 'boolean',
        'allowInvPmtFlag' => 'boolean',
        'login' => 'string',
        'password' => 'string',
        'urlOverride' => 'string',
        'billingStatusIds' => 'array',
        'addAllStatuses' => 'boolean',
        'removeAllStatuses' => 'boolean',
    ];
}
