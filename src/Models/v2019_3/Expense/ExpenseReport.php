<?php

namespace Spinen\ConnectWise\Models\v2019_3\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport
 *
 * @property integer $id
 * @property integer $year
 * @property integer $period
 * @property carbon $dateStart
 * @property carbon $dateEnd
 * @property string $status
 * @property double $total
 * @property carbon $dueDate
 */
class ExpenseReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'status' => 'string',
        'total' => 'double',
        'dueDate' => 'carbon',
    ];
}
