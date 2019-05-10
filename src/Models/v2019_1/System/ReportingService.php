<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportingService Version v2019_1
 *
 * Model for ReportingService
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
 * @property string $reportingDomain
 * @property string $reportingPassword
 * @property string $reportingUrl
 * @property string $reportingUserName
 */
class ReportingService extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'reportingDomain' => 'string',
        'reportingPassword' => 'string',
        'reportingUrl' => 'string',
        'reportingUserName' => 'string',
    ];
}
