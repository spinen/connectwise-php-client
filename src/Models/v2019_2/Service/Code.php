<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Code Version v2019_2
 *
 * Model for Code
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'boardId' => 'integer',
        'businessUnitId' => 'integer',
        'description' => 'string',
        'id' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
    ];
}
