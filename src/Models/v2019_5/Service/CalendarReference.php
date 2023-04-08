<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarReference Version v2019_5
 *
 * customCalendar is a required reference if basedOn SLA Hours Type is Custom
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
