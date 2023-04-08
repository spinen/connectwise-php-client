<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransaction Version v2018_6
 *
 * Model for GLExportPurchaseTransaction
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon $documentDate
 * @property Carbon $purchaseDate
 * @property Carbon $vendorInvoiceDate
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property CompanyTypeReference $companyType
 * @property CompanyTypeReference $shipToCompanyType
 * @property ContactReference $contact
 * @property ContactReference $shipToContact
 * @property CurrencyReference $currency
 * @property SiteReference $shipToSite
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
 * @property array $purchaseDetail
 * @property array $purchaseDetailTax
 * @property array $taxLevels
 * @property bool $dropshipFlag
 * @property bool $purchaseHeaderFreightTaxableFlag
 * @property bool $purchaseHeaderTaxableFlag
 * @property bool $useAvalaraTaxFlag
 * @property float $freightAmount
 * @property float $taxGroupRate
 * @property float $total
 * @property int $dueDays
 * @property string $apAccountNumber
 * @property string $billingTermsXref
 * @property string $cityTaxXref
 * @property string $countyTaxXref
 * @property string $description
 * @property string $documentNumber
 * @property string $freightPackingSlip
 * @property string $id
 * @property string $memo
 * @property string $packingSlip
 * @property string $purchaseClass
 * @property string $purchaseHeaderTaxGroup
 * @property string $shipToCompanyAccountNumber
 * @property string $shipToTaxGroup
 * @property string $stateTaxXref
 * @property string $taxAgencyXref
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 * @property string $vendorNumber
 */
class GLExportPurchaseTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'apAccountNumber' => 'string',
        'billingTerms' => BillingTermsReference::class,
        'billingTermsXref' => 'string',
        'cityTaxXref' => 'string',
        'company' => CompanyReference::class,
        'companyType' => CompanyTypeReference::class,
        'contact' => ContactReference::class,
        'countyTaxXref' => 'string',
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentDate' => Carbon::class,
        'documentNumber' => 'string',
        'dropshipFlag' => 'boolean',
        'dueDays' => 'integer',
        'freightAmount' => 'float',
        'freightPackingSlip' => 'string',
        'id' => 'string',
        'memo' => 'string',
        'packingSlip' => 'string',
        'purchaseClass' => 'string',
        'purchaseDate' => Carbon::class,
        'purchaseDetail' => 'array',
        'purchaseDetailTax' => 'array',
        'purchaseHeaderFreightTaxableFlag' => 'boolean',
        'purchaseHeaderTaxGroup' => 'string',
        'purchaseHeaderTaxableFlag' => 'boolean',
        'shipToCompany' => CompanyReference::class,
        'shipToCompanyAccountNumber' => 'string',
        'shipToCompanyType' => CompanyTypeReference::class,
        'shipToContact' => ContactReference::class,
        'shipToSite' => SiteReference::class,
        'shipToTaxGroup' => 'string',
        'site' => SiteReference::class,
        'stateTaxXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => TaxCodeReference::class,
        'taxGroupRate' => 'float',
        'taxLevels' => 'array',
        'total' => 'float',
        'useAvalaraTaxFlag' => 'boolean',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceDate' => Carbon::class,
        'vendorInvoiceNumber' => 'string',
        'vendorNumber' => 'string',
    ];
}
