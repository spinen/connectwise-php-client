<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportingService Version v2018_4
 *
 * Model for ReportingService
 *
 * @property integer $id
 * @property string $reportingUserName
 * @property string $reportingPassword
 * @property string $reportingDomain
 * @property string $reportingUrl
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class ReportingService extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reportingUserName' => 'string',
        'reportingPassword' => 'string',
        'reportingDomain' => 'string',
        'reportingUrl' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
