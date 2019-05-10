<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationDepartment Version v2019_2
 *
 * Model for LocationDepartment
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class LocationDepartment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
