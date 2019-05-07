<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationWorkRole
 *
 * @property integer $id
 * @property boolean $workRoleInactiveFlag
 */
class LocationWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workRoleInactiveFlag' => 'boolean',
    ];
}
