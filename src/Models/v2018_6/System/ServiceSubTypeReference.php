<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSubTypeReference Version v2018_6
 *
 * Model for ServiceSubTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceSubTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
