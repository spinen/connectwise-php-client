<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Callback extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
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
