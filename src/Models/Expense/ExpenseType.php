<?php

namespace Spinen\ConnectWise\Models\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'amountCaption' => 'string',
        'reimbursementRate' => 'double',
        'billExpenses' => 'string',
        'invoiceMarkupOption' => 'string',
        'invoiceMarkupAmount' => 'double',
        'advancedAmountFlag' => 'boolean',
        'mileageFlag' => 'boolean',
        'quantityFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'maxAmount' => 'double',
    ];
}
