<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Severity
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $defaultFlag
 */
class Severity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'defaultFlag' => 'boolean',
    ];
}
