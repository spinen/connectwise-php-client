<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2019_1
 *
 * Model for ConfigurationReference
 *
 * @property Metadata $_info
 * @property integer $id
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
