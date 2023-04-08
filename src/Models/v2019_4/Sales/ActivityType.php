<?php

namespace Spinen\ConnectWise\Models\v2019_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityType Version v2019_4
 *
 * Model for ActivityType
 *
 * @property Metadata $_info
 * @property bool $defaultFlag
 * @property bool $emailFlag
 * @property bool $historyFlag
 * @property bool $inactiveFlag
 * @property bool $memoFlag
 * @property int $id
 * @property int $points
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
        'points' => 'integer',
    ];
}
