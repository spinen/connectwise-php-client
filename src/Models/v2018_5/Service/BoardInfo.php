<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardInfo Version v2018_5
 *
 * Model for BoardInfo
 *
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property boolean $inactiveFlag
 * @property boolean $projectFlag
 * @property integer $id
 * @property string $name
 */
class BoardInfo extends Model
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
        'inactiveFlag' => 'boolean',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'projectFlag' => 'boolean'
    ];
}
