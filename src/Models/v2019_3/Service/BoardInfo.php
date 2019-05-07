<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardInfo
 *
 * @property integer $id
 * @property string $name
 * @property boolean $projectFlag
 * @property boolean $inactiveFlag
 */
class BoardInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'projectFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
