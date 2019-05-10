<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductRecurring Version v2018_6
 * 
 * Model for ProductRecurring
 *
 * @property float $recurringRevenue
 * @property float $recurringCost
 * @property Carbon\Carbon $startDate
 * @property Carbon\Carbon $endDate
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
        'recurringRevenue' => 'float',
        'recurringCost' => 'float',
        'startDate' => 'Carbon\Carbon',
        'endDate' => 'Carbon\Carbon',
        'billCycleId' => 'integer',
        'cycles' => 'integer',
        'cycleType' => 'string',
    ];
}
