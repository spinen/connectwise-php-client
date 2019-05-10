<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardInfo Version v2018_6
 *
 * Model for BoardInfo
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference',
        'name' => 'string',
        'projectFlag' => 'boolean',
    ];
}
