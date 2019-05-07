<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailToken
 *
 * @property integer $id
 * @property string $token
 * @property string $description
 * @property boolean $addressFlag
 * @property boolean $agreementFlag
 * @property boolean $companyFlag
 * @property boolean $configFlag
 * @property boolean $contactFlag
 * @property boolean $invoiceFlag
 * @property boolean $purchaseOrderFlag
 * @property boolean $purchaseOrderStatusFlag
 * @property boolean $rmaFlag
 * @property boolean $salesFlag
 * @property boolean $serviceFlag
 * @property boolean $tracksFlag
 * @property boolean $workflowFlag
 * @property boolean $portalPasswordFlag
 */
class EmailToken extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'token' => 'string',
        'description' => 'string',
        'addressFlag' => 'boolean',
        'agreementFlag' => 'boolean',
        'companyFlag' => 'boolean',
        'configFlag' => 'boolean',
        'contactFlag' => 'boolean',
        'invoiceFlag' => 'boolean',
        'purchaseOrderFlag' => 'boolean',
        'purchaseOrderStatusFlag' => 'boolean',
        'rmaFlag' => 'boolean',
        'salesFlag' => 'boolean',
        'serviceFlag' => 'boolean',
        'tracksFlag' => 'boolean',
        'workflowFlag' => 'boolean',
        'portalPasswordFlag' => 'boolean',
    ];
}
