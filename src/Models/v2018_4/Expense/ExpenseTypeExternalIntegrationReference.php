<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeExternalIntegrationReference Version v2018_4
 *
 * Model for ExpenseTypeExternalIntegrationReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Expense\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
