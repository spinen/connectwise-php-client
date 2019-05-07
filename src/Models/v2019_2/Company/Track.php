<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Track
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property array $notifyActionIds
 */
class Track extends Model
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
        'notifyActionIds' => 'array',
    ];
}
