<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransaction Version v2019_2
 * 
 * Model for GLExportTransaction
 *
 * @property integer $id
 * @property string $glClass
 * @property string $glTypeId
 * @property Carbon\Carbon $documentDate
 * @property string $documentNumber
 * @property string $documentType
 * @property string $memo
 * @property string $description
 * @property string $attention
 * @property string $salesTerritory
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference $companyType
 * @property string $companyAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference $billingTerms
 * @property string $billingTermsXref
 * @property integer $dueDays
 * @property Carbon\Carbon $dueDate
 * @property boolean $emailDeliveryFlag
 * @property boolean $printDeliveryFlag
 * @property boolean $agreementPrePaymentFlag
 * @property string $accountNumber
 * @property string $billingType
 * @property string $glEntryIds
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property float $total
 * @property string $salesRepId
 * @property string $salesRepName
 * @property boolean $taxable
 * @property float $taxableTotal
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property float $taxGroupRate
 * @property boolean $piggyBackFlag
 * @property string $taxAccountNumber
 * @property float $salesTax
 * @property float $stateTax
 * @property float $countyTax
 * @property float $cityTax
 * @property float $taxableAmount1
 * @property float $taxableAmount2
 * @property float $taxableAmount3
 * @property float $taxableAmount4
 * @property float $taxableAmount5
 * @property string $taxAgencyXref
 * @property string $stateTaxXref
 * @property string $countyTaxXref
 * @property string $taxId
 * @property boolean $taxDpAppliedFlag
 * @property boolean $useAvalaraFlag
 * @property boolean $sendAvalaraTaxFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $shipToCompany
 * @property string $shipCompanyAccountNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference $shipCompanyType
 * @property string $shipTaxId
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $shipSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference $shipContact
 * @property array $detail
 * @property array $taxLevels
 */
class GLExportTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'glClass' => 'string',
        'glTypeId' => 'string',
        'documentDate' => 'Carbon\Carbon',
        'documentNumber' => 'string',
        'documentType' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'attention' => 'string',
        'salesTerritory' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference',
        'companyAccountNumber' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'dueDays' => 'integer',
        'dueDate' => 'Carbon\Carbon',
        'emailDeliveryFlag' => 'boolean',
        'printDeliveryFlag' => 'boolean',
        'agreementPrePaymentFlag' => 'boolean',
        'accountNumber' => 'string',
        'billingType' => 'string',
        'glEntryIds' => 'string',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference',
        'project' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'total' => 'float',
        'salesRepId' => 'string',
        'salesRepName' => 'string',
        'taxable' => 'boolean',
        'taxableTotal' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'taxGroupRate' => 'float',
        'piggyBackFlag' => 'boolean',
        'taxAccountNumber' => 'string',
        'salesTax' => 'float',
        'stateTax' => 'float',
        'countyTax' => 'float',
        'cityTax' => 'float',
        'taxableAmount1' => 'float',
        'taxableAmount2' => 'float',
        'taxableAmount3' => 'float',
        'taxableAmount4' => 'float',
        'taxableAmount5' => 'float',
        'taxAgencyXref' => 'string',
        'stateTaxXref' => 'string',
        'countyTaxXref' => 'string',
        'taxId' => 'string',
        'taxDpAppliedFlag' => 'boolean',
        'useAvalaraFlag' => 'boolean',
        'sendAvalaraTaxFlag' => 'boolean',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'shipCompanyAccountNumber' => 'string',
        'shipCompanyType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference',
        'shipTaxId' => 'string',
        'shipSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'shipContact' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference',
        'detail' => 'array',
        'taxLevels' => 'array',
    ];
}
