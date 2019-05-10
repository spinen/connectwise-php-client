<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport Version v2018_6
 *
 * Model for ExpenseReport
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 * @property float $total
 * @property integer $id
 * @property integer $period
 * @property integer $year
 * @property string $status
 */
class ExpenseReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'dueDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Expense\MemberReference',
        'period' => 'integer',
        'status' => 'string',
        'total' => 'float',
        'year' => 'integer',
    ];
}
