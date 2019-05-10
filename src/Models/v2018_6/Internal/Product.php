<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Product Version v2018_6
 *
 * Model for Product
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'identifier' => 'string',
        'installedFlag' => 'boolean',
        'password' => 'string'
    ];
}
