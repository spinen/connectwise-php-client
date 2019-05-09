<?php

namespace Spinen\ConnectWise\Models\v2019_1\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2019_1
 * 
 * Model for ConfigurationReference
 *
 * @property integer $id
 * @property string $deviceIdentifier
 * @property Spinen\ConnectWise\Models\v2019_1\Project\Metadata $_info
 */
class ConfigurationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deviceIdentifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Project\Metadata',
    ];
}