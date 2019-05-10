<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Type Version v2018_5
 *
 * Model for Type
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class Type extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
    ];
}
