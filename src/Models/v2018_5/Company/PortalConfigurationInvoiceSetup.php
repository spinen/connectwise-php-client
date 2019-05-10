<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationInvoiceSetup Version v2018_5
 *
 * Model for PortalConfigurationInvoiceSetup
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Company\PortalConfigurationPaymentProcessorReference $paymentProcessor
 * @property Spinen\ConnectWise\Models\v2018_5\Company\PortalConfigurationReference $portalConfiguration
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SystemLocationReference $location
 * @property array $billingStatusIds
 * @property boolean $addAllStatuses
 * @property boolean $allowInvPmtFlag
 * @property boolean $displayInvPmtFlag
 * @property boolean $removeAllStatuses
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $urlOverride
 */
class PortalConfigurationInvoiceSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'addAllStatuses' => 'boolean',
        'allowInvPmtFlag' => 'boolean',
        'billingStatusIds' => 'array',
        'displayInvPmtFlag' => 'boolean',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Company\SystemLocationReference',
        'login' => 'string',
        'password' => 'string',
        'paymentProcessor' => 'Spinen\ConnectWise\Models\v2018_5\Company\PortalConfigurationPaymentProcessorReference',
        'portalConfiguration' => 'Spinen\ConnectWise\Models\v2018_5\Company\PortalConfigurationReference',
        'removeAllStatuses' => 'boolean',
        'urlOverride' => 'string',
    ];
}
