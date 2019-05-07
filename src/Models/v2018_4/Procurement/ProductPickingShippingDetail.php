<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductPickingShippingDetail
 *
 * @property integer $id
 * @property integer $pickedQuantity
 * @property integer $shippedQuantity
 * @property string $serialNumber
 * @property array $serialNumberIds
 * @property string $trackingNumber
 * @property integer $lineNumber
 * @property integer $quantity
 */
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
