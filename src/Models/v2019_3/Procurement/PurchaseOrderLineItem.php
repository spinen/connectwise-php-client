<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2019_3
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
 * @property bool $backorderedFlag
 * @property bool $canceledFlag
 * @property bool $closedFlag
 * @property bool $displayInternalNotesFlag
 * @property float $quantity
 * @property float $tax
 * @property float $unitCost
 * @property int $id
 * @property int $lineNumber
 * @property int $purchaseOrderId
 * @property int $receivedQuantity
 * @property string $canceledBy
 * @property string $canceledReason
 * @property string $description
 * @property string $internalNotes
 * @property string $packingSlip
 * @property string $receivedStatus
 * @property string $serialNumbers
 * @property string $shipSet
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
        'receivedStatus' => 'string',
        'serialNumbers' => 'string',
        'shipDate' => Carbon::class,
        'shipSet' => 'string',
        'shipmentMethod' => ShipmentMethodReference::class,
        'tax' => 'float',
        'trackingNumber' => 'string',
        'unitCost' => 'float',
        'unitOfMeasure' => UnitOfMeasureReference::class,
        'vendorOrderNumber' => 'string',
        'warehouse' => WarehouseReference::class,
        'warehouseBin' => WarehouseBinReference::class,
    ];
}
