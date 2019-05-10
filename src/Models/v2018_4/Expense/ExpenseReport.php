<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport Version v2018_4
 * 
 * Model for ExpenseReport
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\MemberReference $member
 * @property integer $year
 * @property integer $period
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dateEnd
 * @property string $status
 * @property float $total
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\Metadata $_info
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
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Expense\MemberReference',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'Carbon\Carbon',
        'dateEnd' => 'Carbon\Carbon',
        'status' => 'string',
        'total' => 'float',
        'dueDate' => 'Carbon\Carbon',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Expense\Metadata',
    ];
}
