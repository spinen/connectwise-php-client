<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport Version v2019_1
 *
 * Model for ExpenseReport
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Carbon\Carbon $dueDate
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
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'dueDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'period' => 'integer',
        'status' => 'string',
        'total' => 'float',
        'year' => 'integer',
    ];
}
