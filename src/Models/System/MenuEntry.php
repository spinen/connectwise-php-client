<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class MenuEntry extends Model
{
    protected $casts = [
        'id'                 => 'integer',
        //        'menuLocation'       => 'MenuLocationReference',
        'caption'            => 'string',
        'link'               => 'string',
        'newWindowFlag'      => 'boolean',
        //        'locationIds'        => 'integer[]',
        'origin'             => 'string',
        'addAllLocations'    => 'boolean',
        'removeAllLocations' => 'boolean',
        'smallMenuIconId '   => 'integer',
        'largeMenuIconId '   => 'integer',
        //        '_info'              => 'Metadata',
    ];
}
