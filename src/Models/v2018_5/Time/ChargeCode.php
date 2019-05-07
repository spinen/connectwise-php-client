<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCode
 *
 * @property integer $id
 * @property string $name
 * @property string $billTime
 * @property boolean $expenseEntryFlag
 * @property boolean $allowAllExpenseTypeFlag
 * @property boolean $timeEntryFlag
 * @property string $integrationXref
 * @property array $expenseTypeIds
 */
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
