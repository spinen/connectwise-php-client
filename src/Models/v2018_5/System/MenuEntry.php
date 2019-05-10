<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntry Version v2018_5
 *
 * Model for MenuEntry
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\MenuLocationReference $menuLocation
 * @property string $caption
 * @property string $link
 * @property boolean $newWindowFlag
 * @property array $locationIds
 * @property string $origin
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property integer $smallMenuIconId
 * @property integer $largeMenuIconId
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
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
        'menuLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\MenuLocationReference',
        'caption' => 'string',
        'link' => 'string',
        'newWindowFlag' => 'boolean',
        'locationIds' => 'array',
        'origin' => 'string',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'smallMenuIconId' => 'integer',
        'largeMenuIconId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
