<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationStatus Version v2019_1
 *
 * Model for ConfigurationStatus
 *
 * @property Metadata $_info
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $description
 */
class ConfigurationStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
    ];
}
