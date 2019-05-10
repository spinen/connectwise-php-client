<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExemption Version v2019_3
 *
 * Model for ExpenseTypeExemption
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseTypeReference $expenseType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property array $taxableLevels
 * @property integer $id
 */
class ExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'expenseType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\ExpenseTypeReference',
        'id' => 'integer',
        'taxableLevels' => 'array',
    ];
}
