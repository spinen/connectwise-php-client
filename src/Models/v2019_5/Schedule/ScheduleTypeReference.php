<?php

namespace Spinen\ConnectWise\Models\v2019_5\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleTypeReference Version v2019_5
 *
 * Model for ScheduleTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class ScheduleTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string'
    ];
}
