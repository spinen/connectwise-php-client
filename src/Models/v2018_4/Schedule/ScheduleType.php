<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleType Version v2018_4
 *
 * Model for ScheduleType
 *
 * @property ChargeCodeReference $chargeCode
 * @property Metadata $_info
 * @property ServiceLocationReference $where
 * @property bool $systemFlag
 * @property int $id
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
        'where' => ServiceLocationReference::class,
    ];
}
