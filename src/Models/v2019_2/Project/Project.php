<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2019_2
 *
 * Model for Project
 *
 * @property Carbon\Carbon $actualEnd
 * @property Carbon\Carbon $actualStart
 * @property Carbon\Carbon $billingStartDate
 * @property Carbon\Carbon $estimatedEnd
 * @property Carbon\Carbon $estimatedStart
 * @property Carbon\Carbon $scheduledEnd
 * @property Carbon\Carbon $scheduledStart
 * @property Spinen\ConnectWise\Models\v2019_2\Project\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2019_2\Project\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $expenseApprover
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Project\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference $companyLocation
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Project\TaxCodeReference $taxCode
 * @property array $customFields
 * @property boolean $billProjectAfterClosedFlag
 * @property boolean $billUnapprovedTimeAndExpense
 * @property boolean $budgetFlag
 * @property boolean $doNotDisplayInPortalFlag
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property boolean $restrictDownPaymentFlag
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
 * @property integer $id
 * @property integer $projectTemplateId
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
        'actualEnd' => 'Carbon\Carbon',
        'actualHours' => 'float',
        'actualStart' => 'Carbon\Carbon',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Project\AgreementReference',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_2\Project\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'billingAmount' => 'float',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingStartDate' => 'Carbon\Carbon',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Project\BillingTermsReference',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Project\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemDepartmentReference',
        'description' => 'string',
        'doNotDisplayInPortalFlag' => 'boolean',
        'downpayment' => 'float',
        'estimatedEnd' => 'Carbon\Carbon',
        'estimatedExpenseCost' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedHours' => 'float',
        'estimatedProductCost' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStart' => 'Carbon\Carbon',
        'estimatedTimeCost' => 'float',
        'estimatedTimeRevenue' => 'float',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'id' => 'integer',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\Project\OpportunityReference',
        'percentComplete' => 'float',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'Carbon\Carbon',
        'scheduledHours' => 'float',
        'scheduledStart' => 'Carbon\Carbon',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_2\Project\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Project\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Project\TaxCodeReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectTypeReference',
    ];
}
