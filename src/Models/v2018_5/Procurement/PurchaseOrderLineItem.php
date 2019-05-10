<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2018_5
 *
 * Model for PurchaseOrderLineItem
 *
 * @property Carbon $dateCanceled
 * @property Carbon $dateCanceledUtc
 * @property Carbon $expectedShipDate
 * @property Carbon $shipDate
 * @property IvItemReference $product
 * @property Metadata $_info
 * @property ShipmentMethodReference $shipmentMethod
 * @property UnitOfMeasureReference $unitOfMeasure
 * @property WarehouseBinReference $warehouseBin
 * @property WarehouseReference $warehouse
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
        '_info' => Metadata::class,
        'backorderedFlag' => 'boolean',
        'canceledBy' => 'string',
        'canceledFlag' => 'boolean',
        'canceledReason' => 'string',
        'closedFlag' => 'boolean',
        'customFields' => 'array',
        'dateCanceled' => Carbon::class,
        'dateCanceledUtc' => Carbon::class,
        'description' => 'string',
        'displayInternalNotesFlag' => 'boolean',
        'expectedShipDate' => Carbon::class,
        'id' => 'integer',
        'internalNotes' => 'string',
        'lineNumber' => 'integer',
        'packingSlip' => 'string',
        'product' => IvItemReference::class,
        'purchaseOrderId' => 'integer',
        'quantity' => 'float',
        'receivedQuantity' => 'integer',
        'serialNumbers' => 'string',
        'shipDate' => Carbon::class,
        'shipmentMethod' => ShipmentMethodReference::class,
        'tax' => 'float',
        'trackingNumber' => 'string',
        'unitCost' => 'float',
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'vendorOrderNumber' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class
    ];
}
