<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationStatus Version v2018_5
 *
 * Model for ConfigurationStatus
 *
 * @property integer $id
 * @property string $description
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 */
class ConfigurationStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
