<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExemption Version v2019_1
 *
 * Model for ExpenseTypeExemption
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ExpenseTypeReference $expenseType
 * @property array $taxableLevels
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class ExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expenseType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ExpenseTypeReference',
        'taxableLevels' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
