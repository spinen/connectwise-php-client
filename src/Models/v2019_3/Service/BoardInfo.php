<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardInfo Version v2019_3
 *
 * Model for BoardInfo
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference $department
 * @property boolean $projectFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 */
class BoardInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference',
        'projectFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
    ];
}
