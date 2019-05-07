<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplate
 *
 * @property integer $id
 * @property string $name
 * @property boolean $assignedNotifyFlag
 * @property string $summary
 * @property string $problem
 * @property double $hoursBudget
 * @property string $internalAnalysis
 * @property boolean $timeBillableFlag
 * @property boolean $expenseBillableFlag
 * @property string $purchaseOrderNumber
 * @property string $reference
 * @property boolean $BillComplete_Flag
 * @property boolean $billServiceSeparatelyFlag
 * @property double $billingAmount
 * @property boolean $billUnapprovedTimeAndExpensesFlag
 * @property boolean $overrideFlag
 * @property boolean $timeInvoiceFlag
 * @property boolean $expenseInvoiceFlag
 * @property boolean $productInvoiceFlag
 * @property string $billingMethod
 * @property string $severity
 * @property string $impact
 * @property integer $scheduleDaysBefore
 * @property integer $serviceDaysBefore
 * @property boolean $attachScheduleToNewServiceFlag
 * @property boolean $templateFlag
 * @property boolean $emailContactFlag
 * @property boolean $emailResourceFlag
 * @property boolean $emailCCFlag
 * @property string $emailCC
 * @property boolean $restrictDownpaymentFlag
 */
class ServiceTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'assignedNotifyFlag' => 'boolean',
        'summary' => 'string',
        'problem' => 'string',
        'hoursBudget' => 'double',
        'internalAnalysis' => 'string',
        'timeBillableFlag' => 'boolean',
        'expenseBillableFlag' => 'boolean',
        'purchaseOrderNumber' => 'string',
        'reference' => 'string',
        'BillComplete_Flag' => 'boolean',
        'billServiceSeparatelyFlag' => 'boolean',
        'billingAmount' => 'double',
        'billUnapprovedTimeAndExpensesFlag' => 'boolean',
        'overrideFlag' => 'boolean',
        'timeInvoiceFlag' => 'boolean',
        'expenseInvoiceFlag' => 'boolean',
        'productInvoiceFlag' => 'boolean',
        'billingMethod' => 'string',
        'severity' => 'string',
        'impact' => 'string',
        'scheduleDaysBefore' => 'integer',
        'serviceDaysBefore' => 'integer',
        'attachScheduleToNewServiceFlag' => 'boolean',
        'templateFlag' => 'boolean',
        'emailContactFlag' => 'boolean',
        'emailResourceFlag' => 'boolean',
        'emailCCFlag' => 'boolean',
        'emailCC' => 'string',
        'restrictDownpaymentFlag' => 'boolean',
    ];
}
