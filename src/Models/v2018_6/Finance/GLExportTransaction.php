<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransaction Version v2018_6
 * 
 * Model for GLExportTransaction
 *
 * @property integer $id
 * @property string $glClass
 * @property string $glTypeId
 * @property string $documentDate
 * @property string $documentNumber
 * @property string $documentType
 * @property string $memo
 * @property string $description
 * @property string $attention
 * @property string $salesTerritory
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference $companyType
 * @property string $companyAccountNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference $billingTerms
 * @property string $billingTermsXref
 * @property integer $dueDays
 * @property string $dueDate
 * @property boolean $emailDeliveryFlag
 * @property boolean $printDeliveryFlag
 * @property boolean $agreementPrePaymentFlag
 * @property string $accountNumber
 * @property string $billingType
 * @property string $glEntryIds
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\PurchaseOrderReference $purchaseOrder
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property number $total
 * @property string $salesRepId
 * @property string $salesRepName
 * @property boolean $taxable
 * @property number $taxableTotal
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference $taxCode
 * @property number $taxGroupRate
 * @property boolean $piggyBackFlag
 * @property string $taxAccountNumber
 * @property number $salesTax
 * @property number $stateTax
 * @property number $countyTax
 * @property number $cityTax
 * @property number $taxableAmount1
 * @property number $taxableAmount2
 * @property number $taxableAmount3
 * @property number $taxableAmount4
 * @property number $taxableAmount5
 * @property string $taxAgencyXref
 * @property string $stateTaxXref
 * @property string $countyTaxXref
 * @property string $taxId
 * @property boolean $taxDpAppliedFlag
 * @property boolean $useAvalaraFlag
 * @property boolean $sendAvalaraTaxFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $shipToCompany
 * @property string $shipCompanyAccountNumber
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference $shipCompanyType
 * @property string $shipTaxId
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $shipSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $shipContact
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
        'documentDate' => 'string',
        'documentNumber' => 'string',
        'documentType' => 'string',
        'memo' => 'string',
        'description' => 'string',
        'attention' => 'string',
        'salesTerritory' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference',
        'companyAccountNumber' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Finance\BillingTermsReference',
        'billingTermsXref' => 'string',
        'dueDays' => 'integer',
        'dueDate' => 'string',
        'emailDeliveryFlag' => 'boolean',
        'printDeliveryFlag' => 'boolean',
        'agreementPrePaymentFlag' => 'boolean',
        'accountNumber' => 'string',
        'billingType' => 'string',
        'glEntryIds' => 'string',
        'purchaseOrder' => 'Spinen\ConnectWise\Models\v2018_6\Finance\PurchaseOrderReference',
        'project' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ProjectReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'total' => 'number',
        'salesRepId' => 'string',
        'salesRepName' => 'string',
        'taxable' => 'boolean',
        'taxableTotal' => 'number',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeReference',
        'taxGroupRate' => 'number',
        'piggyBackFlag' => 'boolean',
        'taxAccountNumber' => 'string',
        'salesTax' => 'number',
        'stateTax' => 'number',
        'countyTax' => 'number',
        'cityTax' => 'number',
        'taxableAmount1' => 'number',
        'taxableAmount2' => 'number',
        'taxableAmount3' => 'number',
        'taxableAmount4' => 'number',
        'taxableAmount5' => 'number',
        'taxAgencyXref' => 'string',
        'stateTaxXref' => 'string',
        'countyTaxXref' => 'string',
        'taxId' => 'string',
        'taxDpAppliedFlag' => 'boolean',
        'useAvalaraFlag' => 'boolean',
        'sendAvalaraTaxFlag' => 'boolean',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'shipCompanyAccountNumber' => 'string',
        'shipCompanyType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyTypeReference',
        'shipTaxId' => 'string',
        'shipSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'shipContact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'detail' => 'array',
        'taxLevels' => 'array',
    ];
}
