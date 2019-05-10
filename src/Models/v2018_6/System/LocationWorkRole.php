<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationWorkRole Version v2018_6
 *
 * Model for LocationWorkRole
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\System\WorkRoleReference $workRole
 * @property boolean $workRoleInactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class LocationWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\System\WorkRoleReference',
        'workRoleInactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
