<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeSubTypeItemAssociation Version v2018_6
 *
 * Model for BoardTypeSubTypeItemAssociation
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceItemReference $item
 * @property ServiceSubTypeReference $subType
 * @property ServiceTypeReference $type
 * @property integer $id
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
        'type' => ServiceTypeReference::class
    ];
}
