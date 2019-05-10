<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntryLocation Version v2019_1
 *
 * Model for MenuEntryLocation
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemMenuEntryReference $menuEntry
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'menuEntry' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemMenuEntryReference',
    ];
}
