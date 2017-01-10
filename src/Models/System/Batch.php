<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Batch extends Model
{
    protected $casts = [
        'id' => 'string',
        // TODO: Make this actual class
        // 'responses'        => 'EndpointResponse',
    ];
}
