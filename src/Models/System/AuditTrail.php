<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class AuditTrail extends Model
{
    protected $casts = [
        'text'         => 'string',
        'enteredDate'  => 'string',
        'enteredBy'    => 'string',
        'auditType'    => 'string',
        'auditSubType' => 'string',
        'auditSource'  => 'string',
    ];
}
