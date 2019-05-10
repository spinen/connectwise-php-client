<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Code Version v2018_4
 *
 * Model for Code
 *
 * @property Metadata $_info
 * @property integer $boardId
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property string $description
 * @property string $name
 */
class Code extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardId' => 'integer',
        'businessUnitId' => 'integer',
        'description' => 'string',
        'id' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
    ];
}
