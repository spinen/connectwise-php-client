<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductPickingShippingDetail Version v2018_4
 *
 * Model for ProductPickingShippingDetail
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference $productItem
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference $warehouse
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'id' => 'integer',
        'lineNumber' => 'integer',
        'pickedQuantity' => 'integer',
        'productItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference',
        'quantity' => 'integer',
        'serialNumber' => 'string',
        'serialNumberIds' => 'array',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ShipmentMethodReference',
        'shippedQuantity' => 'integer',
        'trackingNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference',
    ];
}
