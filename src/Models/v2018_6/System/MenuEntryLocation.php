<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntryLocation Version v2018_6
 *
 * Model for MenuEntryLocation
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property SystemMenuEntryReference $menuEntry
 * @property integer $id
 */
class MenuEntryLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'menuEntry' => SystemMenuEntryReference::class
    ];
}
