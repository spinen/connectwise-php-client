<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardTypeInfo Version v2019_1
 *
 * Model for BoardTypeInfo
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Service\BoardReference',
        'id' => 'integer',
        'name' => 'string',
    ];
}
