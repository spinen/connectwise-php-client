<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationStatus Version v2018_6
 *
 * Model for ConfigurationStatus
 *
 * @property Metadata $_info
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property int $id
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
