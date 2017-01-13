<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

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
        'dateCanceled' => 'carbon',
        'dateCanceledUtc' => 'carbon',
        'description' => 'string',
        'displayInternalNotesFlag' => 'boolean',
        'expectedShipDate' => 'carbon',
        'internalNotes' => 'string',
        'lineNumber' => 'integer',
        'packingSlip' => 'string',
        'purchaseOrderId' => 'integer',
        'quantity' => 'double',
        'receivedQuantity' => 'integer',
        'serialNumbers' => 'string',
        'shipDate' => 'carbon',
        'tax' => 'double',
        'trackingNumber' => 'string',
        'unitCost' => 'double',
        'vendorOrderNumber' => 'string',
    ];
}
