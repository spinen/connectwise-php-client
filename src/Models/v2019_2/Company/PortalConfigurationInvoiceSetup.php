<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationInvoiceSetup Version v2019_2
 *
 * Model for PortalConfigurationInvoiceSetup
 *
 * @property Metadata $_info
 * @property PortalConfigurationPaymentProcessorReference $paymentProcessor
 * @property PortalConfigurationReference $portalConfiguration
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'addAllStatuses' => 'boolean',
        'allowInvPmtFlag' => 'boolean',
        'billingStatusIds' => 'array',
        'displayInvPmtFlag' => 'boolean',
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'login' => 'string',
        'password' => 'string',
        'paymentProcessor' => PortalConfigurationPaymentProcessorReference::class,
        'portalConfiguration' => PortalConfigurationReference::class,
        'removeAllStatuses' => 'boolean',
        'urlOverride' => 'string'
    ];
}
