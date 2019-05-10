<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardType Version v2018_4
 *
 * Model for BoardType
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_4\Service\SystemLocationReference $location
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $requestForChangeFlag
 * @property integer $id
 * @property string $category
 * @property string $integrationXref
 * @property string $name
 */
class BoardType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_4\Service\BoardReference',
        'category' => 'string',
        'defaultFlag' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2018_4\Service\SystemDepartmentReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2018_4\Service\SystemLocationReference',
        'name' => 'string',
        'requestForChangeFlag' => 'boolean',
    ];
}
