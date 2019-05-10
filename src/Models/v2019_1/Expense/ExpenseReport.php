<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport Version v2019_1
 *
 * Model for ExpenseReport
 *
 * @property Carbon $dateEnd
 * @property Carbon $dateStart
 * @property Carbon $dueDate
 * @property MemberReference $member
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'dateEnd' => Carbon::class,
        'dateStart' => Carbon::class,
        'dueDate' => Carbon::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'period' => 'integer',
        'status' => 'string',
        'total' => 'float',
        'year' => 'integer'
    ];
}
