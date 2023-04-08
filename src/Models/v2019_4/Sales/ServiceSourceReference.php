<?php

namespace Spinen\ConnectWise\Models\v2019_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceSourceReference Version v2019_4
 *
 * Model for ServiceSourceReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceSourceReference extends Model
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
