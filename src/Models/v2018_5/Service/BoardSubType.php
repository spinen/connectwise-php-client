<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardSubType Version v2018_5
 *
 * Model for BoardSubType
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property array $typeAssociationIds
 * @property boolean $addAllTypesFlag
 * @property boolean $inactiveFlag
 * @property boolean $removeAllTypesFlag
 * @property integer $id
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
        'typeAssociationIds' => 'array'
    ];
}
