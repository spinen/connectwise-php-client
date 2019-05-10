<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Product Version v2018_4
 *
 * Model for Product
 *
 * @property string $identifier
 * @property string $password
 * @property boolean $installedFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Internal\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Internal\Metadata',
    ];
}
