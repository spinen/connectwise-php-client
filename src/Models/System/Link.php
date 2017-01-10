<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Link extends Model
{
    protected $casts = [
        'id'               => 'integer',
        'name'             => 'string',
        'tableReferenceId' => 'integer',
        'url'              => 'string',
//        '_info '           => 'Metadata',
    ];
}
