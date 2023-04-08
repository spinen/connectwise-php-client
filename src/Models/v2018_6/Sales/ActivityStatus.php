<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStatus Version v2018_6
 *
 * Model for ActivityStatus
 *
 * @property Metadata $_info
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property bool $spawnFollowupFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'spawnFollowupFlag' => 'boolean',
    ];
}
