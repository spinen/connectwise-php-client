<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTax Version v2019_1
 * 
 * Model for ExpenseTax
 *
 * @property integer $id
 * @property number $amount
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\ExpenseTaxTypeReference $type
 */
class ExpenseTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'number',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Expense\ExpenseTaxTypeReference',
    ];
}
