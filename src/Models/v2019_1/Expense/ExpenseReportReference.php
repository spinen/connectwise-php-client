<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportReference Version v2019_1
 *
 * Model for ExpenseReportReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ExpenseReportReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Expense\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
