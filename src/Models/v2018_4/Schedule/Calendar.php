<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Calendar
 *
 * @property integer $id
 * @property string $name
 * @property string $mondayStartTime
 * @property string $mondayEndTime
 * @property string $tuesdayStartTime
 * @property string $tuesdayEndTime
 * @property string $wednesdayStartTime
 * @property string $wednesdayEndTime
 * @property string $thursdayStartTime
 * @property string $thursdayEndTime
 * @property string $fridayStartTime
 * @property string $fridayEndTime
 * @property string $saturdayStartTime
 * @property string $saturdayEndTime
 * @property string $sundayStartTime
 * @property string $sundayEndTime
 */
class Calendar extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'mondayStartTime' => 'string',
        'mondayEndTime' => 'string',
        'tuesdayStartTime' => 'string',
        'tuesdayEndTime' => 'string',
        'wednesdayStartTime' => 'string',
        'wednesdayEndTime' => 'string',
        'thursdayStartTime' => 'string',
        'thursdayEndTime' => 'string',
        'fridayStartTime' => 'string',
        'fridayEndTime' => 'string',
        'saturdayStartTime' => 'string',
        'saturdayEndTime' => 'string',
        'sundayStartTime' => 'string',
        'sundayEndTime' => 'string',
    ];
}
