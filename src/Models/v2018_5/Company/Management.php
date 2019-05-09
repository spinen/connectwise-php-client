<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Management Version v2018_5
 * 
 * Model for Management
 *
 * @property integer $id
 * @property string $runTime
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference $addedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference $deletedConfigurationStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Company\IntegratorLoginReference $integratorLogin
 * @property boolean $scheduleExecutiveSummaryReportFlag
 * @property integer $executiveSummaryReportScheduleDay
 * @property integer $executiveSummaryReportScheduleHour
 * @property integer $executiveSummaryReportScheduleMinute
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
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
        'runTime' => 'string',
        'addedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference',
        'deletedConfigurationStatus' => 'Spinen\ConnectWise\Models\v2018_5\Company\ConfigurationStatusReference',
        'integratorLogin' => 'Spinen\ConnectWise\Models\v2018_5\Company\IntegratorLoginReference',
        'scheduleExecutiveSummaryReportFlag' => 'boolean',
        'executiveSummaryReportScheduleDay' => 'integer',
        'executiveSummaryReportScheduleHour' => 'integer',
        'executiveSummaryReportScheduleMinute' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
