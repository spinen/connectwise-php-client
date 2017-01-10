<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Document extends Model
{
    protected $casts = [
        'id'             => 'integer',
        'title'          => 'string',
        'fileName'       => 'string',
        'serverFileName' => 'string',
        'owner'          => 'string',
        'linkFlag'       => 'boolean',
        'imageFlag'      => 'boolean',
        'publicFlag'     => 'boolean',
        'readOnlyFlag'   => 'boolean',
//        '_info'          => 'Metadata',
    ];
}
