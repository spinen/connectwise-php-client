<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocationInfo Version v2018_5
 *
 * Model for DepartmentLocationInfo
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class DepartmentLocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
