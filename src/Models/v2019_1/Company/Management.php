<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Management Version v2019_1
 * 
 * Model for Management
 *
 * @property integer $id
 * @property Carbon\Carbon $runTime
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationStatusReference $addedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationStatusReference $deletedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Company\IntegratorLoginReference $integratorLogin
 * @property boolean $scheduleExecutiveSummaryReportFlag
 * @property integer $executiveSummaryReportScheduleDay
 * @property integer $executiveSummaryReportScheduleHour
 * @property integer $executiveSummaryReportScheduleMinute
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
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
        'runTime' => 'Carbon\Carbon',
        'addedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationStatusReference',
        'deletedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2019_1\Company\ConfigurationStatusReference',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2019_1\Company\IntegratorLoginReference',
        'scheduleExecutiveSummaryReportFlag' => 'boolean',
        'executiveSummaryReportScheduleDay' => 'integer',
        'executiveSummaryReportScheduleHour' => 'integer',
        'executiveSummaryReportScheduleMinute' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
    ];
}
