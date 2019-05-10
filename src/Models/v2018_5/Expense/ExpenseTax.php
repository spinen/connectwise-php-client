<?php

namespace Spinen\ConnectWise\Models\v2018_5\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTax Version v2018_5
 *
 * Model for ExpenseTax
 *
 * @property ExpenseTaxTypeReference $type
 * @property float $amount
 * @property integer $id
 */
class ExpenseTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'amount' => 'float',
        'id' => 'integer',
        'type' => ExpenseTaxTypeReference::class,
    ];
}
