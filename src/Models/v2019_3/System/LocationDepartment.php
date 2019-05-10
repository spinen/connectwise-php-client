<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationDepartment Version v2019_3
 *
 * Model for LocationDepartment
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
 * @property integer $id
 */
class LocationDepartment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
    ];
}
