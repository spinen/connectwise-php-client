<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocationInfo Version v2018_6
 *
 * Model for DepartmentLocationInfo
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
    ];
}
