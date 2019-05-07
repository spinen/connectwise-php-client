<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Holiday
 *
 * @property integer $id
 * @property string $name
 * @property boolean $allDayFlag
 * @property string $date
 * @property string $timeStart
 * @property string $timeEnd
 */
class Holiday extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'allDayFlag' => 'boolean',
        'date' => 'string',
        'timeStart' => 'string',
        'timeEnd' => 'string',
    ];
}
