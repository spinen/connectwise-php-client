<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2019_5
 *
 * Model for Project
 *
 * @property AgreementReference $agreement
 * @property BillingTermsReference $billingTerms
 * @property Carbon $actualEnd
 * @property Carbon $actualStart
 * @property Carbon $billingStartDate
 * @property Carbon $estimatedEnd
 * @property Carbon $estimatedStart
 * @property Carbon $scheduledEnd
 * @property Carbon $scheduledStart
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property ContactReference $billToContact
 * @property ContactReference $contact
 * @property ContactReference $shipToContact
 * @property CurrencyReference $currency
 * @property MemberReference $expenseApprover
 * @property MemberReference $manager
 * @property MemberReference $timeApprover
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property ProjectBoardReference $board
 * @property ProjectStatusReference $status
 * @property ProjectTypeReference $type
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $companyLocation
 * @property SystemLocationReference $location
 * @property TaxCodeReference $taxCode
 * @property array $customFields
 * @property bool $billProjectAfterClosedFlag
 * @property bool $billUnapprovedTimeAndExpense
 * @property bool $budgetFlag
 * @property bool $doNotDisplayInPortalFlag
 * @property bool $includeDependenciesFlag
 * @property bool $includeEstimatesFlag
 * @property bool $restrictDownPaymentFlag
 * @property float $actualHours
 * @property float $billingAmount
 * @property float $budgetHours
 * @property float $downpayment
 * @property float $estimatedExpenseCost
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedHours
 * @property float $estimatedProductCost
 * @property float $estimatedProductRevenue
 * @property float $estimatedTimeCost
 * @property float $estimatedTimeRevenue
 * @property float $percentComplete
 * @property float $scheduledHours
 * @property int $id
 * @property int $projectTemplateId
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property string $budgetAnalysis
 * @property string $customerPO
 * @property string $description
 * @property string $name
 */
class Project extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'actualEnd' => Carbon::class,
        'actualHours' => 'float',
        'actualStart' => Carbon::class,
        'agreement' => AgreementReference::class,
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => CompanyReference::class,
        'billToContact' => ContactReference::class,
        'billToSite' => SiteReference::class,
        'billUnapprovedTimeAndExpense' => 'boolean',
        'billingAmount' => 'float',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingStartDate' => Carbon::class,
        'billingTerms' => BillingTermsReference::class,
        'board' => ProjectBoardReference::class,
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'float',
        'company' => CompanyReference::class,
        'companyLocation' => SystemLocationReference::class,
        'contact' => ContactReference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'department' => SystemDepartmentReference::class,
        'description' => 'string',
        'doNotDisplayInPortalFlag' => 'boolean',
        'downpayment' => 'float',
        'estimatedEnd' => Carbon::class,
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedHours' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStart' => Carbon::class,
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'expenseApprover' => MemberReference::class,
        'id' => 'integer',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'location' => SystemLocationReference::class,
        'manager' => MemberReference::class,
        'name' => 'string',
        'opportunity' => OpportunityReference::class,
        'percentComplete' => 'float',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => Carbon::class,
        'scheduledHours' => 'float',
        'scheduledStart' => Carbon::class,
        'shipToCompany' => CompanyReference::class,
        'shipToContact' => ContactReference::class,
        'shipToSite' => SiteReference::class,
        'site' => SiteReference::class,
        'status' => ProjectStatusReference::class,
        'taxCode' => TaxCodeReference::class,
        'timeApprover' => MemberReference::class,
        'type' => ProjectTypeReference::class,
    ];
}
