<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Product Version v2018_5
 *
 * Model for Product
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Metadata $_info
 * @property boolean $installedFlag
 * @property string $identifier
 * @property string $password
 */
class Product extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Metadata',
        'identifier' => 'string',
        'installedFlag' => 'boolean',
        'password' => 'string',
    ];
}
