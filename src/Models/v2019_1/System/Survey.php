<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Survey Version v2019_1
 * 
 * Model for Survey
 *
 * @property integer $id
 * @property string $name
 * @property string $instructions
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class Survey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'instructions' => 'string',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
