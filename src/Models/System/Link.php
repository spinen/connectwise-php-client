<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class Link extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'               => 'integer',
        'name'             => 'string',
        'tableReferenceId' => 'integer',
        'url'              => 'string',
//        '_info '           => 'Metadata',
    ];
}
