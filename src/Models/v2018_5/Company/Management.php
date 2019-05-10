<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Management Version v2018_5
 *
 * Model for Management
 *
 * @property Carbon\Carbon $runTime
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference $addedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference $deletedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Company\IntegratorLoginReference $integratorLogin
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'addedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference',
        'deletedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference',
        'executiveSummaryReportScheduleDay' => 'integer',
        'executiveSummaryReportScheduleHour' => 'integer',
        'executiveSummaryReportScheduleMinute' => 'integer',
        'id' => 'integer',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2018_5\Company\IntegratorLoginReference',
        'runTime' => 'Carbon\Carbon',
        'scheduleExecutiveSummaryReportFlag' => 'boolean',
    ];
}
