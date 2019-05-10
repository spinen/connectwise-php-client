<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class HolidayList Version v2018_4
 *
 * Model for HolidayList
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
