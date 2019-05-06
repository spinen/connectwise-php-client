<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

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
