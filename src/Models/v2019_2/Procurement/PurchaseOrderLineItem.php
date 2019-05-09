<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem Version v2019_2
 * 
 * Model for PurchaseOrderLineItem
 *
 * @property integer $id
 * @property boolean $backorderedFlag
 * @property string $canceledBy
 * @property boolean $canceledFlag
 * @property string $canceledReason
 * @property boolean $closedFlag
 * @property string $dateCanceled
 * @property string $dateCanceledUtc
 * @property string $description
 * @property boolean $displayInternalNotesFlag
 * @property string $expectedShipDate
 * @property string $internalNotes
 * @property integer $lineNumber
 * @property string $packingSlip
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\IvItemReference $product
 * @property integer $purchaseOrderId
 * @property number $quantity
 * @property integer $receivedQuantity
 * @property string $serialNumbers
 * @property string $shipDate
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\ShipmentMethodReference $shipmentMethod
 * @property number $tax
 * @property string $trackingNumber
 * @property number $unitCost
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\UnitOfMeasureReference $unitOfMeasure
 * @property string $vendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference $warehouseBin
 * @property string $receivedStatus
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
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
        'dateCanceled' => 'string',
        'dateCanceledUtc' => 'string',
        'description' => 'string',
        'displayInternalNotesFlag' => 'boolean',
        'expectedShipDate' => 'string',
        'internalNotes' => 'string',
        'lineNumber' => 'integer',
        'packingSlip' => 'string',
        'product' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\IvItemReference',
        'purchaseOrderId' => 'integer',
        'quantity' => 'number',
        'receivedQuantity' => 'integer',
        'serialNumbers' => 'string',
        'shipDate' => 'string',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\ShipmentMethodReference',
        'tax' => 'number',
        'trackingNumber' => 'string',
        'unitCost' => 'number',
        'unitOfMeasure' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\UnitOfMeasureReference',
        'vendorOrderNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseBinReference',
        'receivedStatus' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'customFields' => 'array',
    ];
}
