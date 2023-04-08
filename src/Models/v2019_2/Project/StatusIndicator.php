<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicator Version v2019_2
 *
 * Model for StatusIndicator
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $color
 * @property string $icon
 * @property string $identifier
 * @property string $name
 */
class StatusIndicator extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'color' => 'string',
        'icon' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
