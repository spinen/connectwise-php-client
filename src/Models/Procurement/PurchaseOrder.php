<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class PurchaseOrder extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'businessUnitId' => 'integer',
        'cancelReason' => 'string',
        'closedFlag' => 'boolean',
        'customerCity' => 'string',
        'customerExtension' => 'string',
        'customerName' => 'string',
        'customerPhone' => 'string',
        'customerSiteName' => 'string',
        'customerState' => 'string',
        'customerStreetLine1' => 'string',
        'customerStreetLine2' => 'string',
        'customerZip' => 'string',
        'dateClosed' => 'carbon',
        'dropShipCustomerFlag' => 'boolean',
        'enteredBy' => 'string',
        'freightCost' => 'double',
        'freightPackingSlip' => 'string',
        'freightTaxTotal' => 'double',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'poDate' => 'carbon',
        'poNumber' => 'string',
        'salesTax' => 'double',
        'shipmentDate' => 'carbon',
        'shippingInstructions' => 'string',
        'subTotal' => 'double',
        'taxFreightFlag' => 'boolean',
        'taxPoFlag' => 'boolean',
        'total' => 'double',
        'trackingNumber' => 'string',
        'updateShipmentInfo' => 'boolean',
        'updateVendorOrderNumber' => 'boolean',
        'vendorInvoiceDate' => 'carbon',
        'vendorInvoiceNumber' => 'string',
        'vendorOrderNumber' => 'string',
    ];
}
