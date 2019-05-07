<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderLineItem
 *
 * @property integer $id
 * @property boolean $backorderedFlag
 * @property string $canceledBy
 * @property boolean $canceledFlag
 * @property string $canceledReason
 * @property boolean $closedFlag
 * @property carbon $dateCanceled
 * @property carbon $dateCanceledUtc
 * @property string $description
 * @property boolean $displayInternalNotesFlag
 * @property carbon $expectedShipDate
 * @property string $internalNotes
 * @property integer $lineNumber
 * @property string $packingSlip
 * @property integer $purchaseOrderId
 * @property double $quantity
 * @property integer $receivedQuantity
 * @property string $serialNumbers
 * @property carbon $shipDate
 * @property double $tax
 * @property string $trackingNumber
 * @property double $unitCost
 * @property string $vendorOrderNumber
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
        'customFields' => 'array',
    ];
}
