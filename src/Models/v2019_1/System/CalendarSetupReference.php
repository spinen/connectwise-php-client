<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarSetupReference Version v2019_1
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
