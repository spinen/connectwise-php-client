<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationWorkRole Version v2018_4
 *
 * Model for LocationWorkRole
 *
 * @property Metadata $_info
 * @property SystemLocationReference $location
 * @property WorkRoleReference $workRole
 * @property boolean $workRoleInactiveFlag
 * @property integer $id
 */
class LocationWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location' => SystemLocationReference::class,
        'workRole' => WorkRoleReference::class,
        'workRoleInactiveFlag' => 'boolean',
    ];
}
