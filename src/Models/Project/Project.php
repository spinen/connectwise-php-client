<?php

namespace Spinen\ConnectWise\Models\Project;

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
        'actualEnd' => 'string',
        'actualHours' => 'double',
        'actualStart' => 'string',
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
        'scheduledEnd' => 'string',
        'scheduledHours' => 'double',
        'scheduledStart' => 'string',
    ];
}
