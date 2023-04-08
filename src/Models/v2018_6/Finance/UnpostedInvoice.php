<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoice Version v2018_6
 *
 * Model for UnpostedInvoice
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon $dateClosed
 * @property Carbon $dueDate
 * @property Carbon $invoiceDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property TaxCodeReference $taxCode
 * @property bool $avalaraTaxFlag
 * @property bool $cityTaxFlag
 * @property bool $compositeTaxFlag
 * @property bool $countryTaxFlag
 * @property bool $countyTaxFlag
 * @property bool $invoiceTaxableFlag
 * @property bool $itemTaxableFlag
 * @property bool $levelSixTaxFlag
 * @property bool $stateTaxFlag
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $levelSixTaxAmount
 * @property float $salesTaxAmount
 * @property float $stateTaxAmount
 * @property float $subTotal
 * @property float $total
 * @property int $billingLogId
 * @property int $departmentId
 * @property int $id
 * @property int $locationId
 * @property string $accountNumber
 * @property string $cityTaxXref
 * @property string $compositeTaxXref
 * @property string $countryTaxXref
 * @property string $countyTaxXref
 * @property string $createdBy
 * @property string $description
 * @property string $dueDays
 * @property string $invoiceNumber
 * @property string $invoiceType
 * @property string $levelSixTaxXref
 * @property string $stateTaxXref
 */
class UnpostedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'accountNumber' => 'string',
        'avalaraTaxFlag' => 'boolean',
        'billToCompany' => CompanyReference::class,
        'billToSite' => SiteReference::class,
        'billingLogId' => 'integer',
        'billingTerms' => BillingTermsReference::class,
        'cityTaxAmount' => 'float',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'company' => CompanyReference::class,
        'compositeTaxAmount' => 'float',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'countryTaxAmount' => 'float',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countyTaxAmount' => 'float',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'createdBy' => 'string',
        'currency' => CurrencyReference::class,
        'dateClosed' => Carbon::class,
        'departmentId' => 'integer',
        'description' => 'string',
        'dueDate' => Carbon::class,
        'dueDays' => 'string',
        'id' => 'integer',
        'invoiceDate' => Carbon::class,
        'invoiceNumber' => 'string',
        'invoiceTaxableFlag' => 'boolean',
        'invoiceType' => 'string',
        'itemTaxableFlag' => 'boolean',
        'levelSixTaxAmount' => 'float',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'locationId' => 'integer',
        'salesTaxAmount' => 'float',
        'shipToCompany' => CompanyReference::class,
        'shipToSite' => SiteReference::class,
        'stateTaxAmount' => 'float',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'subTotal' => 'float',
        'taxCode' => TaxCodeReference::class,
        'total' => 'float',
    ];
}
