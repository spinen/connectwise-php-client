<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EntityTypeReference Version v2018_6
 *
 * Model for EntityTypeReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class EntityTypeReference extends Model
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
