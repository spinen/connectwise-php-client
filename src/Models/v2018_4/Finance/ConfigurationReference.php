<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationReference Version v2018_4
 *
 * Model for ConfigurationReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'deviceIdentifier' => 'string',
        'id' => 'integer',
    ];
}
