<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class HolidayListReference Version v2019_1
 *
 * Model for HolidayListReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class HolidayListReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
