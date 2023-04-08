<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2019_2
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
 * @property bool $allowOverruns
 * @property bool $applicationUnlimitedFlag
 * @property bool $autoInvoiceFlag
 * @property bool $billOneTimeFlag
 * @property bool $billableExpenseInvoice
 * @property bool $billableProductInvoice
 * @property bool $billableTimeInvoice
 * @property bool $bottomComment
 * @property bool $cancelledFlag
 * @property bool $carryOverUnused
 * @property bool $chargeToFirm
 * @property bool $coverAgreementExpense
 * @property bool $coverAgreementProduct
 * @property bool $coverAgreementTime
 * @property bool $coverSalesTax
 * @property bool $expireWhenZero
 * @property bool $noEndingDateFlag
 * @property bool $oneTimeFlag
 * @property bool $prorateFlag
 * @property bool $restrictDepartmentFlag
 * @property bool $restrictDownPayment
 * @property bool $restrictLocationFlag
 * @property bool $taxable
 * @property bool $topComment
 * @property float $applicationLimit
 * @property float $billAmount
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property float $prorateFirstBill
 * @property int $expiredDays
 * @property int $id
 * @property int $limit
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
        'workType' => WorkTypeReference::class,
    ];
}
