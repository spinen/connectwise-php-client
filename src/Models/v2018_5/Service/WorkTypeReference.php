<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkTypeReference Version v2018_5
 *
 * Model for WorkTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class WorkTypeReference extends Model
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
