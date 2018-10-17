<?php

namespace Spinen\ConnectWise\Models\Time;

use Spinen\ConnectWise\Support\Model;

class TimePeriodSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'periodApplyTo' => 'string',
        'year' => 'integer',
        'numberFuturePeriods' => 'integer',
        'type' => 'string',
        'description' => 'string',
        'firstPeriodEndDate' => 'string',
        'monthlyPeriodEnds' => 'integer',
        'semiMonthlyFirstPeriod' => 'integer',
        'semiMonthlySecondPeriod' => 'integer',
        'semiMonthlyLastDayFlag' => 'boolean',
        'lastDayFlag' => 'boolean',
        'daysPastEndDate' => 'integer',
    ];
}
