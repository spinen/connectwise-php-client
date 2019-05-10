<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrailEntry Version v2019_3
 *
 * Model for AuditTrailEntry
 *
 * @property string $auditSource
 * @property string $auditSubType
 * @property string $auditType
 * @property string $enteredBy
 * @property string $enteredDate
 * @property string $text
 */
class AuditTrailEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'auditSource' => 'string',
        'auditSubType' => 'string',
        'auditType' => 'string',
        'enteredBy' => 'string',
        'enteredDate' => 'string',
        'text' => 'string'
    ];
}
