<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationDepartment Version v2018_4
 *
 * Model for LocationDepartment
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_4\System\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'department' => 'Spinen\ConnectWise\Models\v2018_4\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\System\SystemLocationReference',
    ];
}
