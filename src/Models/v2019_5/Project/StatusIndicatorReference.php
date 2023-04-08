<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicatorReference Version v2019_5
 *
 * Model for StatusIndicatorReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class StatusIndicatorReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
