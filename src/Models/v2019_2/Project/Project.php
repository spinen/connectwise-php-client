<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2019_2
 *
 * Model for Project
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 * @property Carbon\Carbon $actualEnd
 * @property float $actualHours
 * @property Carbon\Carbon $actualStart
 * @property Spinen\ConnectWise\Models\v2019_2\Project\AgreementReference $agreement
 * @property string $billExpenses
 * @property float $billingAmount
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property Spinen\ConnectWise\Models\v2019_2\Project\BillingTermsReference $billingTerms
 * @property string $billProducts
 * @property boolean $billProjectAfterClosedFlag
 * @property string $billTime
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $billToSite
 * @property boolean $billUnapprovedTimeAndExpense
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectBoardReference $board
 * @property string $budgetAnalysis
 * @property boolean $budgetFlag
 * @property float $budgetHours
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $contact
 * @property string $customerPO
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CurrencyReference $currency
 * @property float $downpayment
 * @property Carbon\Carbon $estimatedEnd
 * @property float $percentComplete
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedHours
 * @property float $estimatedProductRevenue
 * @property Carbon\Carbon $estimatedStart
 * @property float $estimatedTimeRevenue
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $expenseApprover
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $manager
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Project\OpportunityReference $opportunity
 * @property integer $projectTemplateId
 * @property boolean $restrictDownPaymentFlag
 * @property Carbon\Carbon $scheduledEnd
 * @property float $scheduledHours
 * @property Carbon\Carbon $scheduledStart
 * @property Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Project\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\Project\ProjectTypeReference $type
 * @property boolean $doNotDisplayInPortalFlag
 * @property Carbon\Carbon $billingStartDate
 * @property float $estimatedTimeCost
 * @property float $estimatedExpenseCost
 * @property float $estimatedProductCost
 * @property Spinen\ConnectWise\Models\v2019_2\Project\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference $companyLocation
 * @property array $customFields
 */
class Project extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
        'actualEnd' => 'Carbon\Carbon',
        'actualHours' => 'float',
        'actualStart' => 'Carbon\Carbon',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Project\AgreementReference',
        'billExpenses' => 'string',
        'billingAmount' => 'float',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Project\BillingTermsReference',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_2\Project\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Project\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Project\ContactReference',
        'customerPO' => 'string',
        'description' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Project\CurrencyReference',
        'downpayment' => 'float',
        'estimatedEnd' => 'Carbon\Carbon',
        'percentComplete' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedHours' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStart' => 'Carbon\Carbon',
        'estimatedTimeRevenue' => 'float',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemDepartmentReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\Project\OpportunityReference',
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
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_2\Project\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Project\ProjectTypeReference',
        'doNotDisplayInPortalFlag' => 'boolean',
        'billingStartDate' => 'Carbon\Carbon',
        'estimatedTimeCost' => 'float',
        'estimatedExpenseCost' => 'float',
        'estimatedProductCost' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Project\TaxCodeReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_2\Project\SystemLocationReference',
        'customFields' => 'array',
    ];
}
