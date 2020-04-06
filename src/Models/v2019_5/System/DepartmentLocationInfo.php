<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocationInfo Version v2019_5
 *
 * Model for DepartmentLocationInfo
 *
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
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
        '_info' => Metadata::class,
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class
    ];
}
