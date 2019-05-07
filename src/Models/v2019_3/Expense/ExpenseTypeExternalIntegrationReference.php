<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExternalIntegrationReference
 *
 * @property integer $count
 */
class ExpenseTypeExternalIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
    ];
}