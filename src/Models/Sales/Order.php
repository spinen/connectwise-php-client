<?php

namespace Spinen\ConnectWise\Models\Sales;

use Spinen\ConnectWise\Support\Model;

class Order extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone' => 'string',
        'phoneExt' => 'string',
        'email' => 'string',
        'orderDate' => 'carbon',
        'dueDate' => 'carbon',
        'poNumber' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'billClosedFlag' => 'boolean',
        'billShippedFlag' => 'boolean',
        'restrictDownpaymentFlag' => 'boolean',
        'description' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'productIds' => 'array',
        'documentIds' => 'array',
        'invoiceIds' => 'array',
        'configIds' => 'array',
        'total' => 'double',
        'taxTotal' => 'double',
    ];
}
