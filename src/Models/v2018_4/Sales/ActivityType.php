<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityType Version v2018_4
 *
 * Model for ActivityType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $emailFlag
 * @property boolean $inactiveFlag
 * @property boolean $memoFlag
 * @property integer $id
 * @property integer $points
 * @property string $name
 */
class ActivityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'memoFlag' => 'boolean',
        'name' => 'string',
        'points' => 'integer',
    ];
}
