<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductPickingShippingDetail Version v2019_2
 *
 * Model for ProductPickingShippingDetail
 *
 * @property Metadata $_info
 * @property ProductItemReference $productItem
 * @property ShipmentMethodReference $shipmentMethod
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property array $serialNumberIds
 * @property integer $id
 * @property integer $lineNumber
 * @property integer $pickedQuantity
 * @property integer $quantity
 * @property integer $shippedQuantity
 * @property string $serialNumber
 * @property string $trackingNumber
 */
class ProductPickingShippingDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'lineNumber' => 'integer',
        'pickedQuantity' => 'integer',
        'productItem' => ProductItemReference::class,
        'quantity' => 'integer',
        'serialNumber' => 'string',
        'serialNumberIds' => 'array',
        'shipmentMethod' => ShipmentMethodReference::class,
        'shippedQuantity' => 'integer',
        'trackingNumber' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class,
    ];
}
