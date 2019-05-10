<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_1
 * 
 * Model for Agreement
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $subContractContact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\AgreementReference $parentAgreement
 * @property string $customerPO
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SystemDepartmentReference $department
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
 * @property boolean $noEndingDateFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityReference $opportunity
 * @property boolean $cancelledFlag
 * @property Carbon\Carbon $dateCancelled
 * @property string $reasonCancelled
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SLAReference $sla
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
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\BillingCycleReference $billingCycle
 * @property boolean $billOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\BillingTermsReference $billingTerms
 * @property string $invoicingCycle
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference $billToSite
 * @property float $billAmount
 * @property boolean $taxable
 * @property float $prorateFirstBill
 * @property Carbon\Carbon $billStartDate
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\TaxCodeReference $taxCode
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\InvoiceTemplateReference $invoiceTemplate
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference $currency
 * @property string $periodType
 * @property boolean $autoInvoiceFlag
 * @property string $nextInvoiceDate
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Sales\AgreementTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'parentAgreement' => 'Spinen\ConnectWise\Models\v2019_1\Sales\AgreementReference',
        'customerPO' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SystemDepartmentReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'noEndingDateFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityReference',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'Carbon\Carbon',
        'reasonCancelled' => 'string',
        'sla' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SLAReference',
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
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_1\Sales\BillingCycleReference',
        'billOneTimeFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Sales\BillingTermsReference',
        'invoicingCycle' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference',
        'billAmount' => 'float',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'float',
        'billStartDate' => 'Carbon\Carbon',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Sales\TaxCodeReference',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_1\Sales\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Sales\WorkTypeReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ProjectTypeReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Sales\InvoiceTemplateReference',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference',
        'periodType' => 'string',
        'autoInvoiceFlag' => 'boolean',
        'nextInvoiceDate' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'customFields' => 'array',
    ];
}
