<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Report extends Model
{
    protected $casts = [
        'name' => 'string',
    ];
}
