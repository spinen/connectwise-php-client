<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Management Version v2018_4
 *
 * Model for Management
 *
 * @property Carbon $runTime
 * @property ConfigurationStatusReference $addedConfigurationStatus
 * @property ConfigurationStatusReference $deletedConfigurationStatus
 * @property IntegratorLoginReference $integratorLogin
 * @property Metadata $_info
 * @property bool $scheduleExecutiveSummaryReportFlag
 * @property int $executiveSummaryReportScheduleDay
 * @property int $executiveSummaryReportScheduleHour
 * @property int $executiveSummaryReportScheduleMinute
 * @property int $id
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
        'scheduleExecutiveSummaryReportFlag' => 'boolean',
    ];
}
