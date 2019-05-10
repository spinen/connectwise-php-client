<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleLocation Version v2019_3
 *
 * Model for WorkRoleLocation
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property WorkRoleReference $workRole
 * @property float $hourlyRate
 * @property integer $id
 */
class WorkRoleLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'hourlyRate' => 'float',
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'workRole' => WorkRoleReference::class
    ];
}
