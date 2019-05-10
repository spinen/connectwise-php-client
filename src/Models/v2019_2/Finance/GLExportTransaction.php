<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransaction Version v2019_2
 *
 * Model for GLExportTransaction
 *
 * @property Carbon\Carbon $documentDate
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference $shipCompanyType
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference $shipContact
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $shipSite
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 * @property array $detail
 * @property array $taxLevels
 * @property boolean $agreementPrePaymentFlag
 * @property boolean $emailDeliveryFlag
 * @property boolean $piggyBackFlag
 * @property boolean $printDeliveryFlag
 * @property boolean $sendAvalaraTaxFlag
 * @property boolean $taxDpAppliedFlag
 * @property boolean $taxable
 * @property boolean $useAvalaraFlag
 * @property float $cityTax
 * @property float $countyTax
 * @property float $salesTax
 * @property float $stateTax
 * @property float $taxGroupRate
 * @property float $taxableAmount1
 * @property float $taxableAmount2
 * @property float $taxableAmount3
 * @property float $taxableAmount4
 * @property float $taxableAmount5
 * @property float $taxableTotal
 * @property float $total
 * @property integer $dueDays
 * @property integer $id
 * @property string $accountNumber
 * @property string $attention
 * @property string $billingTermsXref
 * @property string $billingType
 * @property string $companyAccountNumber
 * @property string $countyTaxXref
 * @property string $description
 * @property string $documentNumber
 * @property string $documentType
 * @property string $glClass
 * @property string $glEntryIds
 * @property string $glTypeId
 * @property string $memo
 * @property string $salesRepId
 * @property string $salesRepName
 * @property string $salesTerritory
 * @property string $shipCompanyAccountNumber
 * @property string $shipTaxId
 * @property string $stateTaxXref
 * @property string $taxAccountNumber
 * @property string $taxAgencyXref
 * @property string $taxId
 */
class GLExportTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'agreementPrePaymentFlag' => 'boolean',
        'attention' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'billingType' => 'string',
        'cityTax' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'companyAccountNumber' => 'string',
        'companyType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference',
        'countyTax' => 'float',
        'countyTaxXref' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CurrencyReference',
        'description' => 'string',
        'detail' => 'array',
        'documentDate' => 'Carbon\Carbon',
        'documentNumber' => 'string',
        'documentType' => 'string',
        'dueDate' => 'Carbon\Carbon',
        'dueDays' => 'integer',
        'emailDeliveryFlag' => 'boolean',
        'glClass' => 'string',
        'glEntryIds' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'memo' => 'string',
        'piggyBackFlag' => 'boolean',
        'printDeliveryFlag' => 'boolean',
        'project' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ProjectReference',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2019_2\Finance\PurchaseOrderReference',
        'salesRepId' => 'string',
        'salesRepName' => 'string',
        'salesTax' => 'float',
        'salesTerritory' => 'string',
        'sendAvalaraTaxFlag' => 'boolean',
        'shipCompanyAccountNumber' => 'string',
        'shipCompanyType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyTypeReference',
        'shipContact' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference',
        'shipSite' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'shipTaxId' => 'string',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'stateTax' => 'float',
        'stateTaxXref' => 'string',
        'taxAccountNumber' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
        'taxDpAppliedFlag' => 'boolean',
        'taxGroupRate' => 'float',
        'taxId' => 'string',
        'taxLevels' => 'array',
        'taxable' => 'boolean',
        'taxableAmount1' => 'float',
        'taxableAmount2' => 'float',
        'taxableAmount3' => 'float',
        'taxableAmount4' => 'float',
        'taxableAmount5' => 'float',
        'taxableTotal' => 'float',
        'total' => 'float',
        'useAvalaraFlag' => 'boolean',
    ];
}
