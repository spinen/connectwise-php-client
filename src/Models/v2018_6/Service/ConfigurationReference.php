<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2018_6
 * 
 * Model for ConfigurationReference
 *
 * @property integer $id
 * @property string $deviceIdentifier
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
