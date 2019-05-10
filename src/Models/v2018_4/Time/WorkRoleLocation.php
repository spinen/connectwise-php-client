<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleLocation Version v2018_4
 *
 * Model for WorkRoleLocation
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Time\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference $workRole
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\Time\SystemLocationReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference',
    ];
}
