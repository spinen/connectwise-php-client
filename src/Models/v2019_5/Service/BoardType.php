<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardType Version v2019_5
 *
 * Model for BoardType
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $requestForChangeFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'category' => 'string',
        'defaultFlag' => 'boolean',
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'location' => SystemLocationReference::class,
        'name' => 'string',
        'requestForChangeFlag' => 'boolean',
    ];
}
