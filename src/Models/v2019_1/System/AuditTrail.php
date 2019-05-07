<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AuditTrail
 *
 * @property string $text
 * @property string $enteredDate
 * @property string $enteredBy
 * @property string $auditType
 * @property string $auditSubType
 * @property string $auditSource
 */
class AuditTrail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'enteredDate' => 'string',
        'enteredBy' => 'string',
        'auditType' => 'string',
        'auditSubType' => 'string',
        'auditSource' => 'string',
    ];
}
