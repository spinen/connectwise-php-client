<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Management Version v2018_6
 *
 * Model for Management
 *
 * @property Carbon $runTime
 * @property ConfigurationStatusReference $addedConfigurationStatus
 * @property ConfigurationStatusReference $deletedConfigurationStatus
 * @property IntegratorLoginReference $integratorLogin
 * @property Metadata $_info
 * @property boolean $scheduleExecutiveSummaryReportFlag
 * @property integer $executiveSummaryReportScheduleDay
 * @property integer $executiveSummaryReportScheduleHour
 * @property integer $executiveSummaryReportScheduleMinute
 * @property integer $id
 */
class Management extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addedConfigurationStatus' => ConfigurationStatusReference::class,
        'deletedConfigurationStatus' => ConfigurationStatusReference::class,
        'executiveSummaryReportScheduleDay' => 'integer',
        'executiveSummaryReportScheduleHour' => 'integer',
        'executiveSummaryReportScheduleMinute' => 'integer',
        'id' => 'integer',
        'integratorLogin' => IntegratorLoginReference::class,
        'runTime' => Carbon::class,
        'scheduleExecutiveSummaryReportFlag' => 'boolean'
    ];
}
