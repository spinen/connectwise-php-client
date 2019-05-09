<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationInvoiceSetup Version v2018_4
 * 
 * Model for PortalConfigurationInvoiceSetup
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Company\PortalConfigurationReference $portalConfiguration
 * @property boolean $displayInvPmtFlag
 * @property boolean $allowInvPmtFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_4\Company\PortalConfigurationPaymentProcessorReference $paymentProcessor
 * @property string $login
 * @property string $password
 * @property string $urlOverride
 * @property array $billingStatusIds
 * @property boolean $addAllStatuses
 * @property boolean $removeAllStatuses
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
class PortalConfigurationInvoiceSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'portalConfiguration' => 'Spinen\ConnectWise\Models\v2018_4\Company\PortalConfigurationReference',
        'displayInvPmtFlag' => 'boolean',
        'allowInvPmtFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\Company\SystemLocationReference',
        'paymentProcessor' => 'Spinen\ConnectWise\Models\v2018_4\Company\PortalConfigurationPaymentProcessorReference',
        'login' => 'string',
        'password' => 'string',
        'urlOverride' => 'string',
        'billingStatusIds' => 'array',
        'addAllStatuses' => 'boolean',
        'removeAllStatuses' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
