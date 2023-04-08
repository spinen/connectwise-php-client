<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationType Version v2018_5
 *
 * Model for ConfigurationType
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property bool $systemFlag
 * @property int $id
 * @property string $name
 */
class ConfigurationType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'systemFlag' => 'boolean',
    ];
}
