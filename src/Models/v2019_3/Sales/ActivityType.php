<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityType Version v2019_3
 * 
 * Model for ActivityType
 *
 * @property integer $id
 * @property string $name
 * @property integer $points
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $emailFlag
 * @property boolean $memoFlag
 * @property boolean $historyFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 */
class ActivityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'points' => 'integer',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'emailFlag' => 'boolean',
        'memoFlag' => 'boolean',
        'historyFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
    ];
}
