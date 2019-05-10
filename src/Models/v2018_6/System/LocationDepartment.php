<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationDepartment Version v2018_6
 *
 * Model for LocationDepartment
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
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
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
