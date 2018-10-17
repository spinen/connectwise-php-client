<?php

namespace Spinen\ConnectWise\Models\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseReportAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
    ];
}
