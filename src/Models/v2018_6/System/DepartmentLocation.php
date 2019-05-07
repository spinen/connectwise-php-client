<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocation
 *
 * @property integer $id
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 */
class DepartmentLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
    ];
}
