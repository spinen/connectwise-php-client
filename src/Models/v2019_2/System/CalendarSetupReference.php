<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarSetupReference Version v2019_2
 *
 * Model for CalendarSetupReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property int $ownerId
 */
class CalendarSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'ownerId' => 'integer',
    ];
}
