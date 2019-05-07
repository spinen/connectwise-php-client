<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalConfigurationInvoiceSetup
 *
 * @property integer $id
 * @property boolean $displayInvPmtFlag
 * @property boolean $allowInvPmtFlag
 * @property string $login
 * @property string $password
 * @property string $urlOverride
 * @property array $billingStatusIds
 * @property boolean $addAllStatuses
 * @property boolean $removeAllStatuses
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
