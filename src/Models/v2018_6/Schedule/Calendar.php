<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Calendar Version v2018_6
 *
 * Model for Calendar
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\HolidayListReference $holidayList
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 * @property integer $id
 * @property string $fridayEndTime
 * @property string $fridayStartTime
 * @property string $mondayEndTime
 * @property string $mondayStartTime
 * @property string $name
 * @property string $saturdayEndTime
 * @property string $saturdayStartTime
 * @property string $sundayEndTime
 * @property string $sundayStartTime
 * @property string $thursdayEndTime
 * @property string $thursdayStartTime
 * @property string $tuesdayEndTime
 * @property string $tuesdayStartTime
 * @property string $wednesdayEndTime
 * @property string $wednesdayStartTime
 */
class Calendar extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
        'fridayEndTime' => 'string',
        'fridayStartTime' => 'string',
        'holidayList' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\HolidayListReference',
        'id' => 'integer',
        'mondayEndTime' => 'string',
        'mondayStartTime' => 'string',
        'name' => 'string',
        'saturdayEndTime' => 'string',
        'saturdayStartTime' => 'string',
        'sundayEndTime' => 'string',
        'sundayStartTime' => 'string',
        'thursdayEndTime' => 'string',
        'thursdayStartTime' => 'string',
        'tuesdayEndTime' => 'string',
        'tuesdayStartTime' => 'string',
        'wednesdayEndTime' => 'string',
        'wednesdayStartTime' => 'string',
    ];
}
