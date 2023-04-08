<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ReportingService Version v2019_2
 *
 * Model for ReportingService
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'reportingDomain' => 'string',
        'reportingPassword' => 'string',
        'reportingUrl' => 'string',
        'reportingUserName' => 'string',
    ];
}
