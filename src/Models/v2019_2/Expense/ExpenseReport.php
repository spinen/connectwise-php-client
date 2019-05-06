<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'status' => 'string',
        'total' => 'double',
        'dueDate' => 'carbon',
    ];
}
