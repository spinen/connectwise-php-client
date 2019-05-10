<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransaction Version v2019_2
 *
 * Model for GLExportTransaction
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon\Carbon $documentDate
 * @property Carbon\Carbon $dueDate
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property CompanyTypeReference $companyType
 * @property CompanyTypeReference $shipCompanyType
 * @property ContactReference $shipContact
 * @property CurrencyReference $currency
 * @property ProjectReference $project
 * @property PurchaseOrderReference $purchaseOrder
 * @property SiteReference $shipSite
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
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
        'billingTerms' => BillingTermsReference::class,
        'billingTermsXref' => 'string',
        'billingType' => 'string',
        'cityTax' => 'float',
        'company' => CompanyReference::class,
        'companyAccountNumber' => 'string',
        'companyType' => CompanyTypeReference::class,
        'countyTax' => 'float',
        'countyTaxXref' => 'string',
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'detail' => 'array',
        'documentDate' => Carbon\Carbon::class,
        'documentNumber' => 'string',
        'documentType' => 'string',
        'dueDate' => Carbon\Carbon::class,
        'dueDays' => 'integer',
        'emailDeliveryFlag' => 'boolean',
        'glClass' => 'string',
        'glEntryIds' => 'string',
        'glTypeId' => 'string',
        'id' => 'integer',
        'memo' => 'string',
        'piggyBackFlag' => 'boolean',
        'printDeliveryFlag' => 'boolean',
        'project' => ProjectReference::class,
        'purchaseOrder' => PurchaseOrderReference::class,
        'salesRepId' => 'string',
        'salesRepName' => 'string',
        'salesTax' => 'float',
        'salesTerritory' => 'string',
        'sendAvalaraTaxFlag' => 'boolean',
        'shipCompanyAccountNumber' => 'string',
        'shipCompanyType' => CompanyTypeReference::class,
        'shipContact' => ContactReference::class,
        'shipSite' => SiteReference::class,
        'shipTaxId' => 'string',
        'shipToCompany' => CompanyReference::class,
        'site' => SiteReference::class,
        'stateTax' => 'float',
        'stateTaxXref' => 'string',
        'taxAccountNumber' => 'string',
        'taxAgencyXref' => 'string',
        'taxCode' => TaxCodeReference::class,
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
