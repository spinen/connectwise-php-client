<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntry Version v2019_2
 *
 * Model for MenuEntry
 *
 * @property MenuLocationReference $menuLocation
 * @property Metadata $_info
 * @property array $locationIds
 * @property bool $addAllLocations
 * @property bool $newWindowFlag
 * @property bool $removeAllLocations
 * @property int $id
 * @property int $largeMenuIconId
 * @property int $smallMenuIconId
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
        '_info' => Metadata::class,
        'addAllLocations' => 'boolean',
        'caption' => 'string',
        'id' => 'integer',
        'largeMenuIconId' => 'integer',
        'link' => 'string',
        'locationIds' => 'array',
        'menuLocation' => MenuLocationReference::class,
        'newWindowFlag' => 'boolean',
        'origin' => 'string',
        'removeAllLocations' => 'boolean',
        'smallMenuIconId' => 'integer',
    ];
}
