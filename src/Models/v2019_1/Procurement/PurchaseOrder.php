<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrder Version v2019_1
 * 
 * Model for PurchaseOrder
 *
 * @property integer $id
 * @property integer $businessUnitId
 * @property string $cancelReason
 * @property boolean $closedFlag
 * @property string $customerCity
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $customerCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ContactReference $customerContact
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CountryReference $customerCountry
 * @property string $customerExtension
 * @property string $customerName
 * @property string $customerPhone
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference $customerSite
 * @property string $customerSiteName
 * @property string $customerState
 * @property string $customerStreetLine1
 * @property string $customerStreetLine2
 * @property string $customerZip
 * @property string $dateClosed
 * @property boolean $dropShipCustomerFlag
 * @property string $enteredBy
 * @property number $freightCost
 * @property string $freightPackingSlip
 * @property number $freightTaxTotal
 * @property string $internalNotes
 * @property integer $locationId
 * @property string $poDate
 * @property string $poNumber
 * @property number $salesTax
 * @property string $shipmentDate
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ShipmentMethodReference $shipmentMethod
 * @property string $shippingInstructions
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusReference $status
 * @property number $subTotal
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\TaxCodeReference $taxCode
 * @property boolean $taxFreightFlag
 * @property boolean $taxPoFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\BillingTermsReference $terms
 * @property number $total
 * @property string $trackingNumber
 * @property boolean $updateShipmentInfo
 * @property boolean $updateVendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $vendorCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\ContactReference $vendorContact
 * @property string $vendorInvoiceDate
 * @property string $vendorInvoiceNumber
 * @property string $vendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference $vendorSite
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
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
        'customerCompany' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'customerContact' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ContactReference',
        'customerCountry' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CountryReference',
        'customerExtension' => 'string',
        'customerName' => 'string',
        'customerPhone' => 'string',
        'customerSite' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference',
        'customerSiteName' => 'string',
        'customerState' => 'string',
        'customerStreetLine1' => 'string',
        'customerStreetLine2' => 'string',
        'customerZip' => 'string',
        'dateClosed' => 'string',
        'dropShipCustomerFlag' => 'boolean',
        'enteredBy' => 'string',
        'freightCost' => 'number',
        'freightPackingSlip' => 'string',
        'freightTaxTotal' => 'number',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'poDate' => 'string',
        'poNumber' => 'string',
        'salesTax' => 'number',
        'shipmentDate' => 'string',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ShipmentMethodReference',
        'shippingInstructions' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusReference',
        'subTotal' => 'number',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\TaxCodeReference',
        'taxFreightFlag' => 'boolean',
        'taxPoFlag' => 'boolean',
        'terms' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\BillingTermsReference',
        'total' => 'number',
        'trackingNumber' => 'string',
        'updateShipmentInfo' => 'boolean',
        'updateVendorOrderNumber' => 'boolean',
        'vendorCompany' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'vendorContact' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\ContactReference',
        'vendorInvoiceDate' => 'string',
        'vendorInvoiceNumber' => 'string',
        'vendorOrderNumber' => 'string',
        'vendorSite' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\WarehouseReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'customFields' => 'array',
    ];
}
