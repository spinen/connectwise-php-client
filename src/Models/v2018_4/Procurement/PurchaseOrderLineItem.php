<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2018_4
 *
 * Model for PurchaseOrderLineItem
 *
 * @property integer $id
 * @property boolean $backorderedFlag
 * @property string $canceledBy
 * @property boolean $canceledFlag
 * @property string $canceledReason
 * @property boolean $closedFlag
 * @property Carbon\Carbon $dateCanceled
 * @property Carbon\Carbon $dateCanceledUtc
 * @property string $description
 * @property boolean $displayInternalNotesFlag
 * @property Carbon\Carbon $expectedShipDate
 * @property string $internalNotes
 * @property integer $lineNumber
 * @property string $packingSlip
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\IvItemReference $product
 * @property integer $purchaseOrderId
 * @property float $quantity
 * @property integer $receivedQuantity
 * @property string $serialNumbers
 * @property Carbon\Carbon $shipDate
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ShipmentMethodReference $shipmentMethod
 * @property float $tax
 * @property string $trackingNumber
 * @property float $unitCost
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property string $vendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property array $customFields
 */
class PurchaseOrderLineItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'backorderedFlag' => 'boolean',
        'canceledBy' => 'string',
        'canceledFlag' => 'boolean',
        'canceledReason' => 'string',
        'closedFlag' => 'boolean',
        'dateCanceled' => 'Carbon\Carbon',
        'dateCanceledUtc' => 'Carbon\Carbon',
        'description' => 'string',
        'displayInternalNotesFlag' => 'boolean',
        'expectedShipDate' => 'Carbon\Carbon',
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'customFields' => 'array',
    ];
}
