<?php

namespace Spinen\ConnectWise\Models\v2018_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project
 *
 * @property integer $id
 * @property carbon $actualEnd
 * @property double $actualHours
 * @property carbon $actualStart
 * @property string $billExpenses
 * @property double $billingAmount
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property string $billProducts
 * @property boolean $billProjectAfterClosedFlag
 * @property string $billTime
 * @property boolean $billUnapprovedTimeAndExpense
 * @property string $budgetAnalysis
 * @property boolean $budgetFlag
 * @property double $budgetHours
 * @property integer $businessUnitId
 * @property string $customerPO
 * @property string $description
 * @property double $downpayment
 * @property carbon $estimatedEnd
 * @property double $estimatedExpenseRevenue
 * @property double $estimatedHours
 * @property double $estimatedProductRevenue
 * @property carbon $estimatedStart
 * @property double $estimatedTimeRevenue
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property integer $locationId
 * @property string $name
 * @property integer $projectTemplateId
 * @property boolean $restrictDownPaymentFlag
 * @property carbon $scheduledEnd
 * @property double $scheduledHours
 * @property carbon $scheduledStart
 * @property boolean $doNotDisplayInPortalFlag
 * @property carbon $billingStartDate
 * @property double $estimatedTimeCost
 * @property double $estimatedExpenseCost
 * @property double $estimatedProductCost
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
        'actualEnd' => 'carbon',
        'actualHours' => 'double',
        'actualStart' => 'carbon',
        'billExpenses' => 'string',
        'billingAmount' => 'double',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'double',
        'businessUnitId' => 'integer',
        'customerPO' => 'string',
        'description' => 'string',
        'downpayment' => 'double',
        'estimatedEnd' => 'carbon',
        'estimatedExpenseRevenue' => 'double',
        'estimatedHours' => 'double',
        'estimatedProductRevenue' => 'double',
        'estimatedStart' => 'carbon',
        'estimatedTimeRevenue' => 'double',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'locationId' => 'integer',
        'name' => 'string',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'carbon',
        'scheduledHours' => 'double',
        'scheduledStart' => 'carbon',
        'doNotDisplayInPortalFlag' => 'boolean',
        'billingStartDate' => 'carbon',
        'estimatedTimeCost' => 'double',
        'estimatedExpenseCost' => 'double',
        'estimatedProductCost' => 'double',
        'customFields' => 'array',
    ];
}
