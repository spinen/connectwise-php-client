<?php

namespace Spinen\ConnectWise\Models\v2019_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_4
 *
 * Model for Agreement
 *
 * @property AgreementReference $parentAgreement
 * @property AgreementTypeReference $type
 * @property BillingCycleReference $billingCycle
 * @property BillingTermsReference $billingTerms
 * @property Carbon $billStartDate
 * @property Carbon $dateCancelled
 * @property Carbon $endDate
 * @property Carbon $startDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $subContractCompany
 * @property ContactReference $billToContact
 * @property ContactReference $contact
 * @property ContactReference $subContractContact
 * @property CurrencyReference $currency
 * @property InvoiceTemplateReference $invoiceTemplate
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property ProjectTypeReference $projectType
 * @property SLAReference $sla
 * @property SiteReference $billToSite
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $companyLocation
 * @property SystemLocationReference $location
 * @property TaxCodeReference $taxCode
 * @property WorkRoleReference $workRole
 * @property WorkTypeReference $workType
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
 * @property string $agreementStatus
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
        '_info' => Metadata::class,
        'agreementStatus' => 'string',
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
        'billStartDate' => Carbon::class,
        'billTime' => 'string',
        'billToCompany' => CompanyReference::class,
        'billToContact' => ContactReference::class,
        'billToSite' => SiteReference::class,
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'billableTimeInvoice' => 'boolean',
        'billingCycle' => BillingCycleReference::class,
        'billingTerms' => BillingTermsReference::class,
        'bottomComment' => 'boolean',
        'cancelledFlag' => 'boolean',
        'carryOverUnused' => 'boolean',
        'chargeToFirm' => 'boolean',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'company' => CompanyReference::class,
        'companyLocation' => SystemLocationReference::class,
        'contact' => ContactReference::class,
        'coverAgreementExpense' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverSalesTax' => 'boolean',
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateCancelled' => Carbon::class,
        'department' => SystemDepartmentReference::class,
        'employeeCompNotExceed' => 'string',
        'employeeCompRate' => 'string',
        'endDate' => Carbon::class,
        'expireWhenZero' => 'boolean',
        'expiredDays' => 'integer',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceDescription' => 'string',
        'invoiceTemplate' => InvoiceTemplateReference::class,
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'nextInvoiceDate' => 'string',
        'noEndingDateFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'opportunity' => OpportunityReference::class,
        'parentAgreement' => AgreementReference::class,
        'periodType' => 'string',
        'projectType' => ProjectTypeReference::class,
        'prorateFirstBill' => 'float',
        'prorateFlag' => 'boolean',
        'reasonCancelled' => 'string',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPayment' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'site' => SiteReference::class,
        'sla' => SLAReference::class,
        'startDate' => Carbon::class,
        'subContractCompany' => CompanyReference::class,
        'subContractContact' => ContactReference::class,
        'taxCode' => TaxCodeReference::class,
        'taxable' => 'boolean',
        'topComment' => 'boolean',
        'type' => AgreementTypeReference::class,
        'workOrder' => 'string',
        'workRole' => WorkRoleReference::class,
        'workType' => WorkTypeReference::class
    ];
}
