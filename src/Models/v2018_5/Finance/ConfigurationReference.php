<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2018_5
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
