<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Group
 *
 * @property integer $id
 * @property string $name
 * @property string $publicDescription
 * @property boolean $publicFlag
 * @property boolean $inactiveFlag
 */
class Group extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'publicDescription' => 'string',
        'publicFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
