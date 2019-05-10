<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Survey Version v2019_3
 *
 * Model for Survey
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'instructions' => 'string',
        'name' => 'string'
    ];
}
