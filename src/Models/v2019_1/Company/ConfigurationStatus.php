<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationStatus
 *
 * @property integer $id
 * @property string $description
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
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
    ];
}
