<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleType
 *
 * @property integer $id
 * @property string $name
 * @property string $identifier
 * @property boolean $systemFlag
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
        'systemFlag' => 'boolean',
    ];
}
