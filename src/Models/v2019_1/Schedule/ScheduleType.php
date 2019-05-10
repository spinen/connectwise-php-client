<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleType Version v2019_1
 *
 * Model for ScheduleType
 *
 * @property ChargeCodeReference $chargeCode
 * @property Metadata $_info
 * @property ServiceLocationReference $where
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
        '_info' => Metadata::class,
        'chargeCode' => ChargeCodeReference::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'systemFlag' => 'boolean',
        'where' => ServiceLocationReference::class
    ];
}
