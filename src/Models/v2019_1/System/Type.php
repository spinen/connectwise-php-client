<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Type Version v2019_1
 *
 * Model for Type
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class Type extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
