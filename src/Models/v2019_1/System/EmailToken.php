<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailToken Version v2019_1
 *
 * Model for EmailToken
 *
 * @property boolean $addressFlag
 * @property boolean $agreementFlag
 * @property boolean $companyFlag
 * @property boolean $configFlag
 * @property boolean $contactFlag
 * @property boolean $invoiceFlag
 * @property boolean $portalPasswordFlag
 * @property boolean $purchaseOrderFlag
 * @property boolean $purchaseOrderStatusFlag
 * @property boolean $rmaFlag
 * @property boolean $salesFlag
 * @property boolean $serviceFlag
 * @property boolean $tracksFlag
 * @property boolean $workflowFlag
 * @property integer $id
 * @property string $description
 * @property string $token
 */
class EmailToken extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'addressFlag' => 'boolean',
        'agreementFlag' => 'boolean',
        'companyFlag' => 'boolean',
        'configFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'invoiceFlag' => 'boolean',
        'portalPasswordFlag' => 'boolean',
        'purchaseOrderFlag' => 'boolean',
        'purchaseOrderStatusFlag' => 'boolean',
        'rmaFlag' => 'boolean',
        'salesFlag' => 'boolean',
        'serviceFlag' => 'boolean',
        'token' => 'string',
        'tracksFlag' => 'boolean',
        'workflowFlag' => 'boolean'
    ];
}
