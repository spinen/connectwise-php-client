<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurement Version v2019_3
 *
 * Model for UnpostedProcurement
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon $dateClosed
 * @property Carbon $purchaseDate
 * @property Carbon $vendorInvoiceDate
 * @property CompanyReference $customer
 * @property CompanyReference $vendor
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property PurchaseOrderReference $purchaseOrder
 * @property TaxCodeReference $taxCode
 * @property bool $avalaraTaxFlag
 * @property bool $cityTaxFlag
 * @property bool $compositeTaxFlag
 * @property bool $countryTaxFlag
 * @property bool $countyTaxFlag
 * @property bool $itemTaxableFlag
 * @property bool $levelSixTaxFlag
 * @property bool $purchaseOrderTaxableFlag
 * @property bool $stateTaxFlag
 * @property bool $taxFreightFlag
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $freightCost
 * @property float $freightTaxTotal
 * @property float $levelSixTaxAmount
 * @property float $stateTaxAmount
 * @property float $taxTotal
 * @property float $total
 * @property int $departmentId
 * @property int $id
 * @property int $locationId
 * @property string $cityTaxXref
 * @property string $compositeTaxXref
 * @property string $countryTaxXref
 * @property string $countyTaxXref
 * @property string $description
 * @property string $levelSixTaxXref
 * @property string $procurementType
 * @property string $stateTaxXref
 * @property string $trackingNumber
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 */
class UnpostedProcurement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'avalaraTaxFlag' => 'boolean',
        'billingTerms' => BillingTermsReference::class,
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'compositeTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'currency' => CurrencyReference::class,
        'customer' => CompanyReference::class,
        'dateClosed' => Carbon::class,
        'departmentId' => 'integer',
        'description' => 'string',
        'freightCost' => 'float',
        'freightTaxTotal' => 'float',
        'id' => 'integer',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'procurementType' => 'string',
        'purchaseDate' => Carbon::class,
        'purchaseOrder' => PurchaseOrderReference::class,
        'purchaseOrderTaxableFlag' => 'boolean',
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxFreightFlag' => 'boolean',
        'taxTotal' => 'float',
        'total' => 'float',
        'trackingNumber' => 'string',
        'vendor' => CompanyReference::class,
        'vendorAccountNumber' => 'string',
        'vendorInvoiceDate' => Carbon::class,
        'vendorInvoiceNumber' => 'string',
    ];
}
