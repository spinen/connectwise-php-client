<?php

namespace Spinen\ConnectWise\Models\v2019_4\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocationReference Version v2019_4
 *
 * Model for ServiceLocationReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceLocationReference extends Model
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
