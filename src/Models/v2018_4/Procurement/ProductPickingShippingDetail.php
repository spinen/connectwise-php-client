<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductPickingShippingDetail Version v2018_4
 *
 * Model for ProductPickingShippingDetail
 *
 * @property Metadata $_info
 * @property ProductItemReference $productItem
 * @property ShipmentMethodReference $shipmentMethod
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
 * @property array $serialNumberIds
 * @property int $id
 * @property int $lineNumber
 * @property int $pickedQuantity
 * @property int $quantity
 * @property int $shippedQuantity
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
