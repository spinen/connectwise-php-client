<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class ProductPickingShippingDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pickedQuantity' => 'integer',
        'shippedQuantity' => 'integer',
        'serialNumber' => 'string',
        'serialNumberIds' => 'array',
        'trackingNumber' => 'string',
        'lineNumber' => 'integer',
        'quantity' => 'integer',
    ];
}
