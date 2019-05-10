<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardSubType Version v2018_5
 *
 * Model for BoardSubType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property array $typeAssociationIds
 * @property boolean $addAllTypesFlag
 * @property boolean $removeAllTypesFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class BoardSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'typeAssociationIds' => 'array',
        'addAllTypesFlag' => 'boolean',
        'removeAllTypesFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}
