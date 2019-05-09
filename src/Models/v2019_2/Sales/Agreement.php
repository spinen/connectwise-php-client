<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_2
 * 
 * Model for Agreement
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $subContractContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\AgreementReference $parentAgreement
 * @property string $customerPO
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference $department
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property string $startDate
 * @property string $endDate
 * @property boolean $noEndingDateFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityReference $opportunity
 * @property boolean $cancelledFlag
 * @property string $dateCancelled
 * @property string $reasonCancelled
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SLAReference $sla
 * @property string $workOrder
 * @property string $internalNotes
 * @property string $applicationUnits
 * @property number $applicationLimit
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
 * @property number $compHourlyRate
 * @property number $compLimitAmount
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\BillingCycleReference $billingCycle
 * @property boolean $billOneTimeFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference $billingTerms
 * @property string $invoicingCycle
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $billToSite
 * @property number $billAmount
 * @property boolean $taxable
 * @property number $prorateFirstBill
 * @property string $billStartDate
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference $taxCode
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\InvoiceTemplateReference $invoiceTemplate
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference $currency
 * @property string $periodType
 * @property boolean $autoInvoiceFlag
 * @property string $nextInvoiceDate
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference $companyLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
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
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Sales\AgreementTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'parentAgreement' => 'Spinen\ConnectWise\Models\v2019_2\Sales\AgreementReference',
        'customerPO' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemDepartmentReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'string',
        'endDate' => 'string',
        'noEndingDateFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityReference',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'string',
        'reasonCancelled' => 'string',
        'sla' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SLAReference',
        'workOrder' => 'string',
        'internalNotes' => 'string',
        'applicationUnits' => 'string',
        'applicationLimit' => 'number',
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
        'compHourlyRate' => 'number',
        'compLimitAmount' => 'number',
        'billingCycle' => 'Spinen\ConnectWise\Models\v2019_2\Sales\BillingCycleReference',
        'billOneTimeFlag' => 'boolean',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference',
        'invoicingCycle' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'billAmount' => 'number',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'number',
        'billStartDate' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Sales\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Sales\WorkTypeReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ProjectTypeReference',
        'invoiceTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Sales\InvoiceTemplateReference',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference',
        'periodType' => 'string',
        'autoInvoiceFlag' => 'boolean',
        'nextInvoiceDate' => 'string',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SystemLocationReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'customFields' => 'array',
    ];
}
