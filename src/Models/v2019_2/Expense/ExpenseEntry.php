<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'chargeToId' => 'integer',
        'chargeToType' => 'string',
        'amount' => 'double',
        'billableOption' => 'string',
        'date' => 'carbon',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'notes' => 'string',
        'invoiceAmount' => 'double',
        'taxes' => 'array',
        'status' => 'string',
        'billAmount' => 'double',
        'customFields' => 'array',
    ];
}
