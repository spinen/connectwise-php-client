<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTaxTypeInfo Version v2019_2
 *
 * Model for ExpenseTaxTypeInfo
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactive
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Metadata $_info
 */
class ExpenseTaxTypeInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactive' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Metadata',
    ];
}
