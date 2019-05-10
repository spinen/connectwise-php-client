<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductPickingShippingDetail Version v2019_1
 *
 * Model for ProductPickingShippingDetail
 *
 * @property integer $id
 * @property integer $pickedQuantity
 * @property integer $shippedQuantity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ShipmentMethodReference $shipmentMethod
 * @property string $serialNumber
 * @property array $serialNumberIds
 * @property string $trackingNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference $productItem
 * @property integer $lineNumber
 * @property integer $quantity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
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
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseBinReference',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ShipmentMethodReference',
        'serialNumber' => 'string',
        'serialNumberIds' => 'array',
        'trackingNumber' => 'string',
        'productItem' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ProductItemReference',
        'lineNumber' => 'integer',
        'quantity' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
