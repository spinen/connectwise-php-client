<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Code
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $boardId
 * @property integer $locationId
 * @property integer $businessUnitId
 */
class Code extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'boardId' => 'integer',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
    ];
}
