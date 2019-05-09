<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductRecurring Version v2019_1
 * 
 * Model for ProductRecurring
 *
 * @property number $recurringRevenue
 * @property number $recurringCost
 * @property string $startDate
 * @property string $endDate
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
        'recurringRevenue' => 'number',
        'recurringCost' => 'number',
        'startDate' => 'string',
        'endDate' => 'string',
        'billCycleId' => 'integer',
        'cycles' => 'integer',
        'cycleType' => 'string',
    ];
}
