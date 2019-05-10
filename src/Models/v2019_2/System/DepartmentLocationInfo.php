<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocationInfo Version v2019_2
 *
 * Model for DepartmentLocationInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $location
 * @property integer $id
 */
class DepartmentLocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
    ];
}
