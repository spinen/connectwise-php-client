<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2018_4
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
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference $expenseApprover
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProjectBoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ProjectTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\TaxCodeReference $taxCode
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
 * @property float $scheduledHours
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'actualEnd' => 'Carbon\Carbon',
        'actualHours' => 'float',
        'actualStart' => 'Carbon\Carbon',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_4\Sales\AgreementReference',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'billingAmount' => 'float',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingStartDate' => 'Carbon\Carbon',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Sales\BillingTermsReference',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'float',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
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
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference',
        'id' => 'integer',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'locationId' => 'integer',
        'manager' => 'Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityReference',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'Carbon\Carbon',
        'scheduledHours' => 'float',
        'scheduledStart' => 'Carbon\Carbon',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProjectStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Sales\TaxCodeReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ProjectTypeReference',
    ];
}
