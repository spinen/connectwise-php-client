<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_3
 *
 * Model for Agreement
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference $subContractContact
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementReference $parentAgreement
 * @property string $customerPO
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference $department
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property boolean $noEndingDateFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\OpportunityReference $opportunity
 * @property boolean $cancelledFlag
 * @property Carbon\Carbon $dateCancelled
 * @property string $reasonCancelled
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SLAReference $sla
 * @property string $workOrder
 * @property string $internalNotes
 * @property string $applicationUnits
 * @property float $applicationLimit
 * @property string $applicationCycle
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $oneTimeFlag
 * @property boolean $coverAgreementTime
 * @property boolean $coverAgreementProduct
 * @property boolean $coverAgreementExpense
 * @property boolean $coverSalesTax
 * @property boolean $carryOverUnused
 * @property boolean $allowOverruns
 * @property integer $expiredDays
 * @property integer $limit
 * @property boolean $expireWhenZero
 * @property boolean $chargeToFirm
 * @property string $employeeCompRate
 * @property string $employeeCompNotExceed
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingCycleReference $billingCycle
 * @property boolean $billOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference $billingTerms
 * @property string $invoicingCycle
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference $billToSite
 * @property float $billAmount
 * @property boolean $taxable
 * @property float $prorateFirstBill
 * @property Carbon\Carbon $billStartDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference $taxCode
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference $invoiceTemplate
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference $currency
 * @property string $periodType
 * @property boolean $autoInvoiceFlag
 * @property string $nextInvoiceDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference $companyLocation
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property array $customFields
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference',
        'parentAgreement' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementReference',
        'customerPO' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemDepartmentReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'noEndingDateFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Finance\OpportunityReference',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'Carbon\Carbon',
        'reasonCancelled' => 'string',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SLAReference',
        'workOrder' => 'string',
        'internalNotes' => 'string',
        'applicationUnits' => 'string',
        'applicationLimit' => 'float',
        'applicationCycle' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementExpense' => 'boolean',
        'coverSalesTax' => 'boolean',
        'carryOverUnused' => 'boolean',
        'allowOverruns' => 'boolean',
        'expiredDays' => 'integer',
        'limit' => 'integer',
        'expireWhenZero' => 'boolean',
        'chargeToFirm' => 'boolean',
        'employeeCompRate' => 'string',
        'employeeCompNotExceed' => 'string',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingCycleReference',
        'billOneTimeFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Finance\BillingTermsReference',
        'invoicingCycle' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SiteReference',
        'billAmount' => 'float',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'float',
        'billStartDate' => 'Carbon\Carbon',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Finance\TaxCodeReference',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ProjectTypeReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Finance\InvoiceTemplateReference',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Finance\CurrencyReference',
        'periodType' => 'string',
        'autoInvoiceFlag' => 'boolean',
        'nextInvoiceDate' => 'string',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_3\Finance\SystemLocationReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'customFields' => 'array',
    ];
}
