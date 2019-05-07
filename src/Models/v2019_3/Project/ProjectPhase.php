<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectPhase
 *
 * @property integer $id
 * @property integer $projectId
 * @property string $description
 * @property string $wbsCode
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $markAsMilestoneFlag
 * @property string $notes
 * @property carbon $deadlineDate
 * @property boolean $billSeparatelyFlag
 * @property string $billingMethod
 * @property double $scheduledHours
 * @property string $scheduledStart
 * @property string $scheduledEnd
 * @property double $actualHours
 * @property string $actualStart
 * @property string $actualEnd
 * @property double $budgetHours
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property double $hourlyRate
 * @property carbon $billingStartDate
 * @property boolean $billPhaseClosedFlag
 * @property boolean $billProjectClosedFlag
 * @property double $downpayment
 * @property string $poNumber
 * @property double $poAmount
 * @property double $estimatedTimeCost
 * @property double $estimatedExpenseCost
 * @property double $estimatedProductCost
 * @property double $estimatedTimeRevenue
 * @property double $estimatedExpenseRevenue
 * @property double $estimatedProductRevenue
 * @property array $customFields
 */
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
