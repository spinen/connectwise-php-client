<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportingService
 *
 * @property integer $id
 * @property string $reportingUserName
 * @property string $reportingPassword
 * @property string $reportingDomain
 * @property string $reportingUrl
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
    ];
}
