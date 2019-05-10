<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleLocation Version v2019_2
 *
 * Model for WorkRoleLocation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Time\SystemLocationReference $location
 * @property float $hourlyRate
 * @property Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Time\SystemLocationReference',
        'hourlyRate' => 'float',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\Time\WorkRoleReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
