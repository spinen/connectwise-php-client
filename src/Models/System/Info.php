<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Info extends Model
{
    protected $casts = [
        'version'        => 'string',
        'isCloud'        => 'boolean',
        'serverTimeZone' => 'string',
    ];
}
