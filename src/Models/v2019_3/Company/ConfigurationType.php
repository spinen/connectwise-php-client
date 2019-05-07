<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property boolean $systemFlag
 */
class ConfigurationType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'systemFlag' => 'boolean',
    ];
}
