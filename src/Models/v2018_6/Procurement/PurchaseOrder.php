<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrder Version v2018_6
 * 
 * Model for PurchaseOrder
 *
 * @property integer $id
 * @property integer $businessUnitId
 * @property string $cancelReason
 * @property boolean $closedFlag
 * @property string $customerCity
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference $customerCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ContactReference $customerContact
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CountryReference $customerCountry
 * @property string $customerExtension
 * @property string $customerName
 * @property string $customerPhone
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SiteReference $customerSite
 * @property string $customerSiteName
 * @property string $customerState
 * @property string $customerStreetLine1
 * @property string $customerStreetLine2
 * @property string $customerZip
 * @property Carbon\Carbon $dateClosed
 * @property boolean $dropShipCustomerFlag
 * @property string $enteredBy
 * @property float $freightCost
 * @property string $freightPackingSlip
 * @property float $freightTaxTotal
 * @property string $internalNotes
 * @property integer $locationId
 * @property Carbon\Carbon $poDate
 * @property string $poNumber
 * @property float $salesTax
 * @property Carbon\Carbon $shipmentDate
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ShipmentMethodReference $shipmentMethod
 * @property string $shippingInstructions
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\PurchaseOrderStatusReference $status
 * @property float $subTotal
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\TaxCodeReference $taxCode
 * @property boolean $taxFreightFlag
 * @property boolean $taxPoFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\BillingTermsReference $terms
 * @property float $total
 * @property string $trackingNumber
 * @property boolean $updateShipmentInfo
 * @property boolean $updateVendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference $vendorCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\ContactReference $vendorContact
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property string $vendorInvoiceNumber
 * @property string $vendorOrderNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SiteReference $vendorSite
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
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
        'customerCompany' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference',
        'customerContact' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ContactReference',
        'customerCountry' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CountryReference',
        'customerExtension' => 'string',
        'customerName' => 'string',
        'customerPhone' => 'string',
        'customerSite' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SiteReference',
        'customerSiteName' => 'string',
        'customerState' => 'string',
        'customerStreetLine1' => 'string',
        'customerStreetLine2' => 'string',
        'customerZip' => 'string',
        'dateClosed' => 'Carbon\Carbon',
        'dropShipCustomerFlag' => 'boolean',
        'enteredBy' => 'string',
        'freightCost' => 'float',
        'freightPackingSlip' => 'string',
        'freightTaxTotal' => 'float',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'poDate' => 'Carbon\Carbon',
        'poNumber' => 'string',
        'salesTax' => 'float',
        'shipmentDate' => 'Carbon\Carbon',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ShipmentMethodReference',
        'shippingInstructions' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\PurchaseOrderStatusReference',
        'subTotal' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\TaxCodeReference',
        'taxFreightFlag' => 'boolean',
        'taxPoFlag' => 'boolean',
        'terms' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\BillingTermsReference',
        'total' => 'float',
        'trackingNumber' => 'string',
        'updateShipmentInfo' => 'boolean',
        'updateVendorOrderNumber' => 'boolean',
        'vendorCompany' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CompanyReference',
        'vendorContact' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\ContactReference',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'vendorInvoiceNumber' => 'string',
        'vendorOrderNumber' => 'string',
        'vendorSite' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SiteReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'customFields' => 'array',
    ];
}
