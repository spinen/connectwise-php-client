<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailToken Version v2018_4
 *
 * Model for EmailToken
 *
 * @property bool $addressFlag
 * @property bool $agreementFlag
 * @property bool $companyFlag
 * @property bool $configFlag
 * @property bool $contactFlag
 * @property bool $invoiceFlag
 * @property bool $portalPasswordFlag
 * @property bool $purchaseOrderFlag
 * @property bool $purchaseOrderStatusFlag
 * @property bool $rmaFlag
 * @property bool $salesFlag
 * @property bool $serviceFlag
 * @property bool $tracksFlag
 * @property bool $workflowFlag
 * @property int $id
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
        'workflowFlag' => 'boolean',
    ];
}
