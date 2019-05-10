<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarReference Version v2018_5
 *
 * customCalendar is a required reference if basedOn SLA Hours Type is Custom
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CalendarReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
