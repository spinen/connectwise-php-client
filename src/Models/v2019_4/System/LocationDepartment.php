<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationDepartment Version v2019_4
 *
 * Model for LocationDepartment
 *
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property int $id
 */
class LocationDepartment extends Model
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
        'location' => SystemLocationReference::class,
    ];
}
