<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExternalIntegrationReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class ExpenseTypeExternalIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
