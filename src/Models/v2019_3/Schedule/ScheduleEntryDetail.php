<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail
 *
 * @property integer $id
 * @property carbon $dateStart
 * @property carbon $dateEnd
 * @property double $hoursScheduled
 */
class ScheduleEntryDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'hoursScheduled' => 'double',
    ];
}
