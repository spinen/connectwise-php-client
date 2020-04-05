<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityType Version v2019_5
 *
 * Model for ActivityType
 *
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $emailFlag
 * @property boolean $historyFlag
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
        'historyFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'memoFlag' => 'boolean',
        'name' => 'string',
        'points' => 'integer'
    ];
}
