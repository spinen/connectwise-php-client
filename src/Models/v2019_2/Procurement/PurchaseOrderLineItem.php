<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2019_2
 *
 * Model for PurchaseOrderLineItem
 *
 * @property Carbon\Carbon $dateCanceled
 * @property Carbon\Carbon $dateCanceledUtc
 * @property Carbon\Carbon $expectedShipDate
 * @property Carbon\Carbon $shipDate
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\IvItemReference $product
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
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
 * @property string $receivedStatus
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
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
        'product' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\IvItemReference',
        'purchaseOrderId' => 'integer',
        'quantity' => 'float',
        'receivedQuantity' => 'integer',
        'receivedStatus' => 'string',
        'serialNumbers' => 'string',
        'shipDate' => 'Carbon\Carbon',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ShipmentMethodReference',
        'tax' => 'float',
        'trackingNumber' => 'string',
        'unitCost' => 'float',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\UnitOfMeasureReference',
        'vendorOrderNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
    ];
}
