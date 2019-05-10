<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardType Version v2018_5
 *
 * Model for BoardType
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $requestForChangeFlag
 * @property string $integrationXref
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class BoardType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'category' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'requestForChangeFlag' => 'boolean',
        'integrationXref' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Service\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Service\SystemDepartmentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}
