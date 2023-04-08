<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceCodeReference Version v2019_3
 *
 * Model for ServiceCodeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class ServiceCodeReference extends Model
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
