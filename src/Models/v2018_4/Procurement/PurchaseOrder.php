<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrder Version v2018_4
 *
 * Model for PurchaseOrder
 *
 * @property BillingTermsReference $terms
 * @property Carbon $dateClosed
 * @property Carbon $poDate
 * @property Carbon $shipmentDate
 * @property Carbon $vendorInvoiceDate
 * @property CompanyReference $customerCompany
 * @property CompanyReference $vendorCompany
 * @property ContactReference $customerContact
 * @property ContactReference $vendorContact
 * @property CountryReference $customerCountry
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property PurchaseOrderStatusReference $status
 * @property ShipmentMethodReference $shipmentMethod
 * @property SiteReference $customerSite
 * @property SiteReference $vendorSite
 * @property TaxCodeReference $taxCode
 * @property WarehouseReference $warehouse
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
        '_info' => Metadata::class,
        'businessUnitId' => 'integer',
        'cancelReason' => 'string',
        'closedFlag' => 'boolean',
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerCity' => 'string',
        'customerCompany' => CompanyReference::class,
        'customerContact' => ContactReference::class,
        'customerCountry' => CountryReference::class,
        'customerExtension' => 'string',
        'customerName' => 'string',
        'customerPhone' => 'string',
        'customerSite' => SiteReference::class,
        'customerSiteName' => 'string',
        'customerState' => 'string',
        'customerStreetLine1' => 'string',
        'customerStreetLine2' => 'string',
        'customerZip' => 'string',
        'dateClosed' => Carbon::class,
        'dropShipCustomerFlag' => 'boolean',
        'enteredBy' => 'string',
        'freightCost' => 'float',
        'freightPackingSlip' => 'string',
        'freightTaxTotal' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'poDate' => Carbon::class,
        'poNumber' => 'string',
        'salesTax' => 'float',
        'shipmentDate' => Carbon::class,
        'shipmentMethod' => ShipmentMethodReference::class,
        'shippingInstructions' => 'string',
        'status' => PurchaseOrderStatusReference::class,
        'subTotal' => 'float',
        'taxCode' => TaxCodeReference::class,
        'taxFreightFlag' => 'boolean',
        'taxPoFlag' => 'boolean',
        'terms' => BillingTermsReference::class,
        'total' => 'float',
        'trackingNumber' => 'string',
        'updateShipmentInfo' => 'boolean',
        'updateVendorOrderNumber' => 'boolean',
        'vendorCompany' => CompanyReference::class,
        'vendorContact' => ContactReference::class,
        'vendorInvoiceDate' => Carbon::class,
        'vendorInvoiceNumber' => 'string',
        'vendorOrderNumber' => 'string',
        'vendorSite' => SiteReference::class,
        'warehouse' => WarehouseReference::class
    ];
}
