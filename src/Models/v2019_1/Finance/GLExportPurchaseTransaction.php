<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportPurchaseTransaction Version v2019_1
 * 
 * Model for GLExportPurchaseTransaction
 *
 * @property string $id
 * @property Carbon\Carbon $documentDate
 * @property string $documentNumber
 * @property string $description
 * @property string $memo
 * @property string $apAccountNumber
 * @property Carbon\Carbon $purchaseDate
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $site
 * @property string $purchaseClass
 * @property float $freightAmount
 * @property string $freightPackingSlip
 * @property string $packingSlip
 * @property boolean $dropshipFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference $currency
 * @property float $total
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference $billingTerms
 * @property string $billingTermsXref
 * @property integer $dueDays
 * @property string $vendorNumber
 * @property string $vendorAccountNumber
 * @property Carbon\Carbon $vendorInvoiceDate
 * @property string $vendorInvoiceNumber
 * @property string $taxAgencyXref
 * @property string $stateTaxXref
 * @property string $countyTaxXref
 * @property string $cityTaxXref
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $shipToCompany
 * @property string $shipToCompanyAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference $shipToCompanyType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $shipToSite
 * @property string $shipToTaxGroup
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference $taxCode
 * @property float $taxGroupRate
 * @property boolean $useAvalaraTaxFlag
 * @property string $purchaseHeaderTaxGroup
 * @property boolean $purchaseHeaderTaxableFlag
 * @property boolean $purchaseHeaderFreightTaxableFlag
 * @property array $taxLevels
 * @property array $purchaseDetail
 * @property array $purchaseDetailTax
 */
class GLExportPurchaseTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentNumber' => 'string',
        'description' => 'string',
        'memo' => 'string',
        'apAccountNumber' => 'string',
        'purchaseDate' => 'Carbon\Carbon',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'purchaseClass' => 'string',
        'freightAmount' => 'float',
        'freightPackingSlip' => 'string',
        'packingSlip' => 'string',
        'dropshipFlag' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CurrencyReference',
        'total' => 'float',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'dueDays' => 'integer',
        'vendorNumber' => 'string',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceDate' => 'Carbon\Carbon',
        'vendorInvoiceNumber' => 'string',
        'taxAgencyXref' => 'string',
        'stateTaxXref' => 'string',
        'countyTaxXref' => 'string',
        'cityTaxXref' => 'string',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'shipToCompanyAccountNumber' => 'string',
        'shipToCompanyType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyTypeReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'shipToTaxGroup' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference',
        'taxGroupRate' => 'float',
        'useAvalaraTaxFlag' => 'boolean',
        'purchaseHeaderTaxGroup' => 'string',
        'purchaseHeaderTaxableFlag' => 'boolean',
        'purchaseHeaderFreightTaxableFlag' => 'boolean',
        'taxLevels' => 'array',
        'purchaseDetail' => 'array',
        'purchaseDetailTax' => 'array',
    ];
}
