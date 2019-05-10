<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimePeriodSetup Version v2018_6
 *
 * Model for TimePeriodSetup
 *
 * @property Metadata $_info
 * @property boolean $lastDayFlag
 * @property boolean $semiMonthlyLastDayFlag
 * @property integer $daysPastEndDate
 * @property integer $id
 * @property integer $monthlyPeriodEnds
 * @property integer $numberFuturePeriods
 * @property integer $semiMonthlyFirstPeriod
 * @property integer $semiMonthlySecondPeriod
 * @property integer $year
 * @property string $description
 * @property string $firstPeriodEndDate
 * @property string $periodApplyTo
 * @property string $type
 */
class TimePeriodSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'daysPastEndDate' => 'integer',
        'description' => 'string',
        'firstPeriodEndDate' => 'string',
        'id' => 'integer',
        'lastDayFlag' => 'boolean',
        'monthlyPeriodEnds' => 'integer',
        'numberFuturePeriods' => 'integer',
        'periodApplyTo' => 'string',
        'semiMonthlyFirstPeriod' => 'integer',
        'semiMonthlyLastDayFlag' => 'boolean',
        'semiMonthlySecondPeriod' => 'integer',
        'type' => 'string',
        'year' => 'integer'
    ];
}
