<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntry Version v2018_6
 *
 * Model for MenuEntry
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\MenuLocationReference $menuLocation
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property array $locationIds
 * @property boolean $addAllLocations
 * @property boolean $newWindowFlag
 * @property boolean $removeAllLocations
 * @property integer $id
 * @property integer $largeMenuIconId
 * @property integer $smallMenuIconId
 * @property string $caption
 * @property string $link
 * @property string $origin
 */
class MenuEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'addAllLocations' => 'boolean',
        'caption' => 'string',
        'id' => 'integer',
        'largeMenuIconId' => 'integer',
        'link' => 'string',
        'locationIds' => 'array',
        'menuLocation' => 'Spinen\ConnectWise\Models\v2018_6\System\MenuLocationReference',
        'newWindowFlag' => 'boolean',
        'origin' => 'string',
        'removeAllLocations' => 'boolean',
        'smallMenuIconId' => 'integer',
    ];
}
