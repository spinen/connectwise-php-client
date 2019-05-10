<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStatusReference Version v2018_6
 *
 * Model for ScheduleStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ScheduleStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
