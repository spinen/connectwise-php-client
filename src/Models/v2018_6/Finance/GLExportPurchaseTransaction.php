<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransaction Version v2018_6
 *
 * Model for GLExportPurchaseTransaction
 *
 * @property Carbon\Carbon $documentDate
 * @property Carbon\Carbon $purchaseDate
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference $shipToCompanyType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property array $purchaseDetail
 * @property array $purchaseDetailTax
 * @property array $taxLevels
 * @property boolean $dropshipFlag
 * @property boolean $purchaseHeaderFreightTaxableFlag
 * @property boolean $purchaseHeaderTaxableFlag
 * @property boolean $useAvalaraTaxFlag
 * @property float $freightAmount
 * @property float $taxGroupRate
 * @property float $total
 * @property integer $dueDays
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
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'cityTaxXref' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'countyTaxXref' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'description' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentNumber' => 'string',
        'dropshipFlag' => 'boolean',
        'dueDays' => 'integer',
        'freightAmount' => 'float',
        'freightPackingSlip' => 'string',
        'id' => 'string',
        'memo' => 'string',
        'packingSlip' => 'string',
        'purchaseClass' => 'string',
        'purchaseDate' => 'Carbon\Carbon',
        'purchaseDetail' => 'array',
        'purchaseDetailTax' => 'array',
        'purchaseHeaderFreightTaxableFlag' => 'boolean',
        'purchaseHeaderTaxGroup' => 'string',
        'purchaseHeaderTaxableFlag' => 'boolean',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'shipToCompanyAccountNumber' => 'string',
        'shipToCompanyType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'shipToTaxGroup' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'stateTaxXref' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'taxGroupRate' => 'float',
        'taxLevels' => 'array',
        'total' => 'float',
        'useAvalaraTaxFlag' => 'boolean',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'vendorInvoiceNumber' => 'string',
        'vendorNumber' => 'string',
    ];
}
