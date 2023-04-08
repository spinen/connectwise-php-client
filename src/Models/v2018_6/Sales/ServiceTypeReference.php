<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTypeReference Version v2018_6
 *
 * Model for ServiceTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceTypeReference extends Model
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
