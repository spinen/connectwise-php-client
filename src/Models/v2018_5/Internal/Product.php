<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Product
 *
 * @property string $identifier
 * @property string $password
 * @property boolean $installedFlag
 */
class Product extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'identifier' => 'string',
        'password' => 'string',
        'installedFlag' => 'boolean',
    ];
}
