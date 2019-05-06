<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

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
        'percentComplete' => 'double',
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
