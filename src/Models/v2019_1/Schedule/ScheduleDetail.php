<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail
 *
 * @property integer $id
 * @property carbon $dateStart
 * @property carbon $dateEnd
 */
class ScheduleDetail extends Model
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
    ];
}
