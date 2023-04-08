<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardSubType Version v2019_2
 *
 * Model for BoardSubType
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property array $typeAssociationIds
 * @property bool $addAllTypesFlag
 * @property bool $inactiveFlag
 * @property bool $removeAllTypesFlag
 * @property int $id
 * @property string $name
 */
class BoardSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllTypesFlag' => 'boolean',
        'board' => BoardReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'removeAllTypesFlag' => 'boolean',
        'typeAssociationIds' => 'array',
    ];
}
