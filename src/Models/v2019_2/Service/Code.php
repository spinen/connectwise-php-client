<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Code Version v2019_2
 *
 * Model for Code
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $boardId
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
