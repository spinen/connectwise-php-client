<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Management
 *
 * @property integer $id
 * @property carbon $runTime
 * @property boolean $scheduleExecutiveSummaryReportFlag
 * @property integer $executiveSummaryReportScheduleDay
 * @property integer $executiveSummaryReportScheduleHour
 * @property integer $executiveSummaryReportScheduleMinute
 */
class Management extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'runTime' => 'carbon',
        'scheduleExecutiveSummaryReportFlag' => 'boolean',
        'executiveSummaryReportScheduleDay' => 'integer',
        'executiveSummaryReportScheduleHour' => 'integer',
        'executiveSummaryReportScheduleMinute' => 'integer',
    ];
}
