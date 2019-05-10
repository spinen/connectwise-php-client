<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoice Version v2019_3
 *
 * Model for UnpostedInvoice
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon\Carbon $dateClosed
 * @property Carbon\Carbon $dueDate
 * @property Carbon\Carbon $invoiceDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $cityTaxFlag
 * @property boolean $compositeTaxFlag
 * @property boolean $countryTaxFlag
 * @property boolean $countyTaxFlag
 * @property boolean $invoiceTaxableFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $levelSixTaxFlag
 * @property boolean $stateTaxFlag
 * @property float $cityTaxAmount
 * @property float $compositeTaxAmount
 * @property float $countryTaxAmount
 * @property float $countyTaxAmount
 * @property float $levelSixTaxAmount
 * @property float $salesTaxAmount
 * @property float $stateTaxAmount
 * @property float $subTotal
 * @property float $total
 * @property integer $billingLogId
 * @property integer $departmentId
 * @property integer $id
 * @property integer $locationId
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
        'dateClosed' => Carbon\Carbon::class,
        'departmentId' => 'integer',
        'description' => 'string',
        'dueDate' => Carbon\Carbon::class,
        'dueDays' => 'string',
        'id' => 'integer',
        'invoiceDate' => Carbon\Carbon::class,
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
