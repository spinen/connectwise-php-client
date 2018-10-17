<?php

namespace Spinen\ConnectWise\Models\Expense;

use Spinen\ConnectWise\Support\Model;

class Classification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'multiplier' => 'double',
        'defaultFlag' => 'boolean',
        'companyFlag' => 'boolean',
        'employeeFlag' => 'boolean',
    ];
}
