<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleLocation
 *
 * @property integer $id
 * @property double $hourlyRate
 */
class WorkRoleLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hourlyRate' => 'double',
    ];
}
