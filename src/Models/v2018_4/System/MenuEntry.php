<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntry
 *
 * @property integer $id
 * @property string $caption
 * @property string $link
 * @property boolean $newWindowFlag
 * @property array $locationIds
 * @property string $origin
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property integer $smallMenuIconId
 * @property integer $largeMenuIconId
 */
class MenuEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'caption' => 'string',
        'link' => 'string',
        'newWindowFlag' => 'boolean',
        'locationIds' => 'array',
        'origin' => 'string',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'smallMenuIconId' => 'integer',
        'largeMenuIconId' => 'integer',
    ];
}
