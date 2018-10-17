<?php

namespace Spinen\ConnectWise\Models\Project;

use Spinen\ConnectWise\Support\Model;

class ProjectPhase extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projectId' => 'integer',
        'description' => 'string',
        'wbsCode' => 'string',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'markAsMilestoneFlag' => 'boolean',
        'notes' => 'string',
        'deadlineDate' => 'carbon',
        'billSeparatelyFlag' => 'boolean',
        'billingMethod' => 'string',
        'scheduledHours' => 'double',
        'scheduledStart' => 'string',
        'scheduledEnd' => 'string',
        'actualHours' => 'double',
        'actualStart' => 'string',
        'actualEnd' => 'string',
        'budgetHours' => 'double',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'hourlyRate' => 'double',
        'billingStartDate' => 'carbon',
        'billPhaseClosedFlag' => 'boolean',
        'billProjectClosedFlag' => 'boolean',
        'downpayment' => 'double',
        'poNumber' => 'string',
        'poAmount' => 'double',
        'estimatedTimeCost' => 'double',
        'estimatedExpenseCost' => 'double',
        'estimatedProductCost' => 'double',
        'estimatedTimeRevenue' => 'double',
        'estimatedExpenseRevenue' => 'double',
        'estimatedProductRevenue' => 'double',
        'customFields' => 'array',
    ];
}
