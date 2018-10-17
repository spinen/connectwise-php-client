<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class ChargeCode extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'billTime' => 'string',
        'expenseEntryFlag' => 'boolean',
        'allowAllExpenseTypeFlag' => 'boolean',
        'timeEntryFlag' => 'boolean',
        'integrationXref' => 'string',
        'expenseTypeIds' => 'array',
    ];
}
