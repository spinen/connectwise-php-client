<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardItem Version v2018_5
 *
 * Model for BoardItem
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class BoardItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_5\Service\BoardReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
    ];
}
