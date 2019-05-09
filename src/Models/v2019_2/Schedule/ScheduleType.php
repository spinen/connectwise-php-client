<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleType Version v2019_2
 * 
 * Model for ScheduleType
 *
 * @property integer $id
 * @property string $name
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\ServiceLocationReference $where
 * @property boolean $systemFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata $_info
 */
class ScheduleType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'identifier' => 'string',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\ChargeCodeReference',
        'where' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\ServiceLocationReference',
        'systemFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata',
    ];
}
