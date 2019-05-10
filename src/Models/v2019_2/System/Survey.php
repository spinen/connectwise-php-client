<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Survey Version v2019_2
 *
 * Model for Survey
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $instructions
 * @property string $name
 */
class Survey extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'instructions' => 'string',
        'name' => 'string',
    ];
}
