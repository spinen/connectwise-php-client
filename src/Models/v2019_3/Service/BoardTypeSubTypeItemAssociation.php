<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeSubTypeItemAssociation Version v2019_3
 *
 * Model for BoardTypeSubTypeItemAssociation
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceItemReference $item
 * @property ServiceSubTypeReference $subType
 * @property ServiceTypeReference $type
 * @property int $id
 */
class BoardTypeSubTypeItemAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'board' => BoardReference::class,
        'id' => 'integer',
        'item' => ServiceItemReference::class,
        'subType' => ServiceSubTypeReference::class,
        'type' => ServiceTypeReference::class,
    ];
}
