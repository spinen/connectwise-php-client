<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_3
 *
 * Model for Agreement
 *
 * @property Carbon\Carbon $billStartDate
 * @property Carbon\Carbon $dateCancelled
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference $parentAgreement
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\BillingCycleReference $billingCycle
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $subContractContact
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\InvoiceTemplateReference $invoiceTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SLAReference $sla
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference $companyLocation
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\WorkTypeReference $workType
 * @property array $customFields
 * @property boolean $allowOverruns
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $autoInvoiceFlag
 * @property boolean $billOneTimeFlag
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property boolean $billableTimeInvoice
 * @property boolean $bottomComment
 * @property boolean $cancelledFlag
 * @property boolean $carryOverUnused
 * @property boolean $chargeToFirm
 * @property boolean $coverAgreementExpense
 * @property boolean $coverAgreementProduct
 * @property boolean $coverAgreementTime
 * @property boolean $coverSalesTax
 * @property boolean $expireWhenZero
 * @property boolean $noEndingDateFlag
 * @property boolean $oneTimeFlag
 * @property boolean $prorateFlag
 * @property boolean $restrictDepartmentFlag
 * @property boolean $restrictDownPayment
 * @property boolean $restrictLocationFlag
 * @property boolean $taxable
 * @property boolean $topComment
 * @property float $applicationLimit
 * @property float $billAmount
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property float $prorateFirstBill
 * @property integer $expiredDays
 * @property integer $id
 * @property integer $limit
 * @property string $applicationCycle
 * @property string $applicationUnits
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $customerPO
 * @property string $employeeCompNotExceed
 * @property string $employeeCompRate
 * @property string $internalNotes
 * @property string $invoiceDescription
 * @property string $invoicingCycle
 * @property string $name
 * @property string $nextInvoiceDate
 * @property string $periodType
 * @property string $reasonCancelled
 * @property string $workOrder
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'allowOverruns' => 'boolean',
        'applicationCycle' => 'string',
        'applicationLimit' => 'float',
        'applicationUnits' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'autoInvoiceFlag' => 'boolean',
        'billAmount' => 'float',
        'billExpenses' => 'string',
        'billOneTimeFlag' => 'boolean',
        'billProducts' => 'string',
        'billStartDate' => 'Carbon\Carbon',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'billableTimeInvoice' => 'boolean',
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_3\Sales\BillingCycleReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Sales\BillingTermsReference',
        'bottomComment' => 'boolean',
        'cancelledFlag' => 'boolean',
        'carryOverUnused' => 'boolean',
        'chargeToFirm' => 'boolean',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'coverAgreementExpense' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverSalesTax' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateCancelled' => 'Carbon\Carbon',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemDepartmentReference',
        'employeeCompNotExceed' => 'string',
        'employeeCompRate' => 'string',
        'endDate' => 'Carbon\Carbon',
        'expireWhenZero' => 'boolean',
        'expiredDays' => 'integer',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceDescription' => 'string',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Sales\InvoiceTemplateReference',
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference',
        'name' => 'string',
        'nextInvoiceDate' => 'string',
        'noEndingDateFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference',
        'parentAgreement' => 'Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference',
        'periodType' => 'string',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ProjectTypeReference',
        'prorateFirstBill' => 'float',
        'prorateFlag' => 'boolean',
        'reasonCancelled' => 'string',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPayment' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference',
        'sla' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SLAReference',
        'startDate' => 'Carbon\Carbon',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Sales\TaxCodeReference',
        'taxable' => 'boolean',
        'topComment' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Sales\AgreementTypeReference',
        'workOrder' => 'string',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Sales\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Sales\WorkTypeReference',
    ];
}
