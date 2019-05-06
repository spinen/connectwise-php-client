<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

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
