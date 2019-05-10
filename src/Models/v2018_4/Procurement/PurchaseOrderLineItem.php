<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2018_4
 *
 * Model for PurchaseOrderLineItem
 *
 * @property Carbon\Carbon $dateCanceled
 * @property Carbon\Carbon $dateCanceledUtc
 * @property Carbon\Carbon $expectedShipDate
 * @property Carbon\Carbon $shipDate
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference $warehouse
 * @property array $customFields
 * @property boolean $backorderedFlag
 * @property boolean $canceledFlag
 * @property boolean $closedFlag
 * @property boolean $displayInternalNotesFlag
 * @property float $quantity
 * @property float $tax
 * @property float $unitCost
 * @property integer $id
 * @property integer $lineNumber
 * @property integer $purchaseOrderId
 * @property integer $receivedQuantity
 * @property string $canceledBy
 * @property string $canceledReason
 * @property string $description
 * @property string $internalNotes
 * @property string $packingSlip
 * @property string $serialNumbers
 * @property string $trackingNumber
 * @property string $vendorOrderNumber
 */
class PurchaseOrderLineItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'backorderedFlag' => 'boolean',
        'canceledBy' => 'string',
        'canceledFlag' => 'boolean',
        'canceledReason' => 'string',
        'closedFlag' => 'boolean',
        'customFields' => 'array',
        'dateCanceled' => 'Carbon\Carbon',
        'dateCanceledUtc' => 'Carbon\Carbon',
        'description' => 'string',
        'displayInternalNotesFlag' => 'boolean',
        'expectedShipDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'lineNumber' => 'integer',
        'packingSlip' => 'string',
        'product' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\IvItemReference',
        'purchaseOrderId' => 'integer',
        'quantity' => 'float',
        'receivedQuantity' => 'integer',
        'serialNumbers' => 'string',
        'shipDate' => 'Carbon\Carbon',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ShipmentMethodReference',
        'tax' => 'float',
        'trackingNumber' => 'string',
        'unitCost' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference',
        'vendorOrderNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference',
    ];
}
