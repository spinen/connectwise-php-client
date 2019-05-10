<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStatus Version v2019_3
 *
 * Model for ActivityStatus
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property boolean $spawnFollowupFlag
 * @property integer $id
 * @property string $name
 */
class ActivityStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'spawnFollowupFlag' => 'boolean',
    ];
}
