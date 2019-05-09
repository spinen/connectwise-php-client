<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2019_1
 * 
 * Model for Project
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 * @property string $actualEnd
 * @property number $actualHours
 * @property string $actualStart
 * @property Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference $agreement
 * @property string $billExpenses
 * @property number $billingAmount
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property Spinen\ConnectWise\Models\v2019_1\Project\BillingTermsReference $billingTerms
 * @property string $billProducts
 * @property boolean $billProjectAfterClosedFlag
 * @property string $billTime
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $billToSite
 * @property boolean $billUnapprovedTimeAndExpense
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectBoardReference $board
 * @property string $budgetAnalysis
 * @property boolean $budgetFlag
 * @property number $budgetHours
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $contact
 * @property string $customerPO
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference $currency
 * @property number $downpayment
 * @property string $estimatedEnd
 * @property number $percentComplete
 * @property number $estimatedExpenseRevenue
 * @property number $estimatedHours
 * @property number $estimatedProductRevenue
 * @property string $estimatedStart
 * @property number $estimatedTimeRevenue
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $expenseApprover
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $manager
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference $opportunity
 * @property integer $projectTemplateId
 * @property boolean $restrictDownPaymentFlag
 * @property string $scheduledEnd
 * @property number $scheduledHours
 * @property string $scheduledStart
 * @property Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_1\Project\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Project\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_1\Project\ProjectTypeReference $type
 * @property boolean $doNotDisplayInPortalFlag
 * @property string $billingStartDate
 * @property number $estimatedTimeCost
 * @property number $estimatedExpenseCost
 * @property number $estimatedProductCost
 * @property Spinen\ConnectWise\Models\v2019_1\Project\TaxCodeReference $taxCode
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
        'actualEnd' => 'string',
        'actualHours' => 'number',
        'actualStart' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_1\Project\AgreementReference',
        'billExpenses' => 'string',
        'billingAmount' => 'number',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Project\BillingTermsReference',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'number',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'customerPO' => 'string',
        'description' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Project\CurrencyReference',
        'downpayment' => 'number',
        'estimatedEnd' => 'string',
        'percentComplete' => 'number',
        'estimatedExpenseRevenue' => 'number',
        'estimatedHours' => 'number',
        'estimatedProductRevenue' => 'number',
        'estimatedStart' => 'string',
        'estimatedTimeRevenue' => 'number',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Project\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Project\SystemDepartmentReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_1\Project\OpportunityReference',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'string',
        'scheduledHours' => 'number',
        'scheduledStart' => 'string',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Project\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_1\Project\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Project\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectStatusReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_1\Project\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Project\ProjectTypeReference',
        'doNotDisplayInPortalFlag' => 'boolean',
        'billingStartDate' => 'string',
        'estimatedTimeCost' => 'number',
        'estimatedExpenseCost' => 'number',
        'estimatedProductCost' => 'number',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Project\TaxCodeReference',
        'customFields' => 'array',
    ];
}
