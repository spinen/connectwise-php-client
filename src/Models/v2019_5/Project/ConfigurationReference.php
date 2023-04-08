<?php

namespace Spinen\ConnectWise\Models\v2019_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2019_5
 *
 * Model for ConfigurationReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $deviceIdentifier
 */
class ConfigurationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'deviceIdentifier' => 'string',
        'id' => 'integer',
    ];
}
