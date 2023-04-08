<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardItemAssociation Version v2018_6
 *
 * Model for BoardItemAssociation
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceItemReference $item
 * @property array $subTypeAssociationIds
 * @property bool $addAllSubTypesFlag
 * @property bool $removeAllSubTypesFlag
 * @property int $id
 */
class BoardItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllSubTypesFlag' => 'boolean',
        'board' => BoardReference::class,
        'id' => 'integer',
        'item' => ServiceItemReference::class,
        'removeAllSubTypesFlag' => 'boolean',
        'subTypeAssociationIds' => 'array',
    ];
}
