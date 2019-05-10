<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrder Version v2019_3
 *
 * Model for PurchaseOrder
 *
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $poDate
 * @property Carbon\Carbon $shipmentDate
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\BillingTermsReference $terms
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference $customerCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference $vendorCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\ContactReference $customerContact
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\ContactReference $vendorContact
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CountryReference $customerCountry
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\PurchaseOrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\ShipmentMethodReference $shipmentMethod
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\SiteReference $customerSite
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\SiteReference $vendorSite
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference $warehouse
 * @property array $customFields
 * @property boolean $closedFlag
 * @property boolean $dropShipCustomerFlag
 * @property boolean $taxFreightFlag
 * @property boolean $taxPoFlag
 * @property boolean $updateShipmentInfo
 * @property boolean $updateVendorOrderNumber
 * @property float $freightCost
 * @property float $freightTaxTotal
 * @property float $salesTax
 * @property float $subTotal
 * @property float $total
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property string $cancelReason
 * @property string $customerCity
 * @property string $customerExtension
 * @property string $customerName
 * @property string $customerPhone
 * @property string $customerSiteName
 * @property string $customerState
 * @property string $customerStreetLine1
 * @property string $customerStreetLine2
 * @property string $customerZip
 * @property string $enteredBy
 * @property string $freightPackingSlip
 * @property string $internalNotes
 * @property string $poNumber
 * @property string $shippingInstructions
 * @property string $trackingNumber
 * @property string $vendorInvoiceNumber
 * @property string $vendorOrderNumber
 */
class PurchaseOrder extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'businessUnitId' => 'integer',
        'cancelReason' => 'string',
        'closedFlag' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CurrencyReference',
        'customFields' => 'array',
        'customerCity' => 'string',
        'customerCompany' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference',
        'customerContact' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\ContactReference',
        'customerCountry' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CountryReference',
        'customerExtension' => 'string',
        'customerName' => 'string',
        'customerPhone' => 'string',
        'customerSite' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\SiteReference',
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
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'poDate' => 'Carbon\Carbon',
        'poNumber' => 'string',
        'salesTax' => 'float',
        'shipmentDate' => 'Carbon\Carbon',
        'shipmentMethod' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\ShipmentMethodReference',
        'shippingInstructions' => 'string',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\PurchaseOrderStatusReference',
        'subTotal' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\TaxCodeReference',
        'taxFreightFlag' => 'boolean',
        'taxPoFlag' => 'boolean',
        'terms' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\BillingTermsReference',
        'total' => 'float',
        'trackingNumber' => 'string',
        'updateShipmentInfo' => 'boolean',
        'updateVendorOrderNumber' => 'boolean',
        'vendorCompany' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\CompanyReference',
        'vendorContact' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\ContactReference',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'vendorInvoiceNumber' => 'string',
        'vendorOrderNumber' => 'string',
        'vendorSite' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\SiteReference',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\WarehouseReference',
    ];
}
