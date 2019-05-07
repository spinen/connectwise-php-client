<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class HolidayList
 *
 * @property integer $id
 * @property string $name
 */
class HolidayList extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];
}
