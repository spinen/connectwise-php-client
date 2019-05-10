<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleType Version v2019_3
 *
 * Model for ScheduleType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\ServiceLocationReference $where
 * @property boolean $systemFlag
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class ScheduleType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ChargeCodeReference',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'systemFlag' => 'boolean',
        'where' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\ServiceLocationReference',
    ];
}
