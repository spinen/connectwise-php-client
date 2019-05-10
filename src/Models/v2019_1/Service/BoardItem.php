<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardItem Version v2019_1
 *
 * Model for BoardItem
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_1\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class BoardItem extends Model
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
        'board' => 'Spinen\ConnectWise\Models\v2019_1\Service\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
