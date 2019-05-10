<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Type Version v2018_4
 *
 * Model for Type
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string'
    ];
}
