<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductRecurring Version v2019_5
 *
 * Model for ProductRecurring
 *
 * @property Carbon $endDate
 * @property Carbon $startDate
 * @property float $recurringCost
 * @property float $recurringRevenue
 * @property int $billCycleId
 * @property int $cycles
 * @property string $cycleType
 */
class ProductRecurring extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'billCycleId' => 'integer',
        'cycleType' => 'string',
        'cycles' => 'integer',
        'endDate' => Carbon::class,
        'recurringCost' => 'float',
        'recurringRevenue' => 'float',
        'startDate' => Carbon::class,
    ];
}
