<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationType Version v2019_3
 *
 * Model for ConfigurationType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 * @property boolean $inactiveFlag
 * @property boolean $systemFlag
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'systemFlag' => 'boolean',
    ];
}
