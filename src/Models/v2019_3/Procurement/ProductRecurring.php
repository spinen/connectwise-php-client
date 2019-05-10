<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductRecurring Version v2019_3
 *
 * Model for ProductRecurring
 *
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property float $recurringCost
 * @property float $recurringRevenue
 * @property integer $billCycleId
 * @property integer $cycles
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
        'endDate' => Carbon\Carbon::class,
        'recurringCost' => 'float',
        'recurringRevenue' => 'float',
        'startDate' => Carbon\Carbon::class,
    ];
}
