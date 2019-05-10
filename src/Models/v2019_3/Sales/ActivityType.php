<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityType Version v2019_3
 *
 * Model for ActivityType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'defaultFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'historyFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'memoFlag' => 'boolean',
        'name' => 'string',
        'points' => 'integer',
    ];
}
