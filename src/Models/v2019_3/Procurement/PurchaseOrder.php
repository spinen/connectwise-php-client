<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrder
 *
 * @property integer $id
 * @property integer $businessUnitId
 * @property string $cancelReason
 * @property boolean $closedFlag
 * @property string $customerCity
 * @property string $customerExtension
 * @property string $customerName
 * @property string $customerPhone
 * @property string $customerSiteName
 * @property string $customerState
 * @property string $customerStreetLine1
 * @property string $customerStreetLine2
 * @property string $customerZip
 * @property carbon $dateClosed
 * @property boolean $dropShipCustomerFlag
 * @property string $enteredBy
 * @property double $freightCost
 * @property string $freightPackingSlip
 * @property double $freightTaxTotal
 * @property string $internalNotes
 * @property integer $locationId
 * @property carbon $poDate
 * @property string $poNumber
 * @property double $salesTax
 * @property carbon $shipmentDate
 * @property string $shippingInstructions
 * @property double $subTotal
 * @property boolean $taxFreightFlag
 * @property boolean $taxPoFlag
 * @property double $total
 * @property string $trackingNumber
 * @property boolean $updateShipmentInfo
 * @property boolean $updateVendorOrderNumber
 * @property carbon $vendorInvoiceDate
 * @property string $vendorInvoiceNumber
 * @property string $vendorOrderNumber
 * @property array $customFields
 */
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
        'customFields' => 'array',
    ];
}
