<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportAudit
 *
 * @property integer $id
 * @property string $message
 * @property string $oldValue
 * @property string $newValue
 * @property string $value
 */
class ExpenseReportAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'oldValue' => 'string',
        'newValue' => 'string',
        'value' => 'string',
    ];
}
