<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarSetupReference Version v2019_2
 * 
 * Model for CalendarSetupReference
 *
 * @property integer $id
 * @property integer $ownerId
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class CalendarSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ownerId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
