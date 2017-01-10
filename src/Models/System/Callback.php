<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Callback extends Model
{
    protected $casts = [
        'id'          => 'integer',
        'description' => 'string',
        'url'         => 'string',
        'objectId'    => 'integer',
        'type'        => 'string',
        'level'       => 'string',
        'memberId'    => 'integer',
//        '_info'       => 'Metadata',
    ];
}
