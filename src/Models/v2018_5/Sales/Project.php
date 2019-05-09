<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2018_5
 * 
 * Model for Project
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property string $actualEnd
 * @property number $actualHours
 * @property string $actualStart
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference $agreement
 * @property string $billExpenses
 * @property number $billingAmount
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\BillingTermsReference $billingTerms
 * @property string $billProducts
 * @property boolean $billProjectAfterClosedFlag
 * @property string $billTime
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference $billToSite
 * @property boolean $billUnapprovedTimeAndExpense
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference $board
 * @property string $budgetAnalysis
 * @property boolean $budgetFlag
 * @property number $budgetHours
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $contact
 * @property string $customerPO
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference $currency
 * @property number $downpayment
 * @property string $estimatedEnd
 * @property number $percentComplete
 * @property number $estimatedExpenseRevenue
 * @property number $estimatedHours
 * @property number $estimatedProductRevenue
 * @property string $estimatedStart
 * @property number $estimatedTimeRevenue
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $expenseApprover
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $manager
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference $opportunity
 * @property integer $projectTemplateId
 * @property boolean $restrictDownPaymentFlag
 * @property string $scheduledEnd
 * @property number $scheduledHours
 * @property string $scheduledStart
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectTypeReference $type
 * @property boolean $doNotDisplayInPortalFlag
 * @property string $billingStartDate
 * @property number $estimatedTimeCost
 * @property number $estimatedExpenseCost
 * @property number $estimatedProductCost
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\TaxCodeReference $taxCode
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'actualEnd' => 'string',
        'actualHours' => 'number',
        'actualStart' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference',
        'billExpenses' => 'string',
        'billingAmount' => 'number',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_5\Sales\BillingTermsReference',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'number',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'customerPO' => 'string',
        'description' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference',
        'downpayment' => 'number',
        'estimatedEnd' => 'string',
        'percentComplete' => 'number',
        'estimatedExpenseRevenue' => 'number',
        'estimatedHours' => 'number',
        'estimatedProductRevenue' => 'number',
        'estimatedStart' => 'string',
        'estimatedTimeRevenue' => 'number',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'locationId' => 'integer',
        'manager' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'string',
        'scheduledHours' => 'number',
        'scheduledStart' => 'string',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectStatusReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectTypeReference',
        'doNotDisplayInPortalFlag' => 'boolean',
        'billingStartDate' => 'string',
        'estimatedTimeCost' => 'number',
        'estimatedExpenseCost' => 'number',
        'estimatedProductCost' => 'number',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_5\Sales\TaxCodeReference',
        'customFields' => 'array',
    ];
}
