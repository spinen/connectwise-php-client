<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeInfo Version v2019_3
 *
 * Model for BoardTypeInfo
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class BoardTypeInfo extends Model
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
        'name' => 'string',
    ];
}
